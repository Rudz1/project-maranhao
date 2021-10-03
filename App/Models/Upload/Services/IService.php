<?php

namespace App\Models\Upload\Services;

/**
 * Description of IService
 *
 * @author andre
 */
interface IService {
    
    /**
     * 
     * @param string $fileName
     * @param string $filePath
     * @param string $uploadDir
     * @param array $allowedExtensions
     * @return string
     */
    public function upload(string $fileName, string $filePath, string $uploadDir, array $allowedExtensions): string;
             
}
