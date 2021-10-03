<?php

namespace App\Models\Upload\Services;

/**
 * Description of Service
 *
 * @author andre
 */
class Service implements IService {
    
    public function upload(string $fileName, string $filePath, string $uploadDir, array $allowedExtensions): string {
        
        $fileNameSplited = explode('.', $fileName);
        $extension = end($fileNameSplited);
        if(!in_array(strtolower($extension), $allowedExtensions)){
            throw new \Exception("Extension {$extension} not allowed. Allowed extensions are:". implode(',', $allowedExtensions));
        }
        
        if(!is_file($filePath)){
            throw new \Exception("File {$filePath} not Found");
        }
        $content = file_get_contents($filePath);
            
        $fileName = uniqid('upload').'_'.$fileName; 
        
        $newFullFileName = rtrim($uploadDir, '/') . '/' . $fileName;
        $storeged = file_put_contents($newFullFileName, $content);
           
        if(!$storeged){
            throw new \Exception("Error saving {$newFullFileName}, check the permissions");
        }
        return \App\Config\Config::getUploadDir().$fileName;
        
    }

}
