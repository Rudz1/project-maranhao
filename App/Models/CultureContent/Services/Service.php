<?php

namespace App\Models\CultureContent\Services;

/**
 * Description of Service
 *
 * @author andre
 */
class Service implements IService {
   
    private $repository;
    
    public function __construct($repository) {
        $this->repository = $repository;
    }

    public function add(\App\Models\Upload\Services\Service $uploadService, string $title, string $imageName, string $imagePath, string $text): \App\Models\CultureContent\Entities\CultureContent {
        if(!$title){
            throw new \Exception('title is required');
        }
        if(!$text){
            throw new \Exception('text is required');
        }
        
        $imagesUri = $uploadService->upload($imageName, $imagePath, \App\Config\Config::getFullUploadDir(), \App\Config\Config::$UPLOAD_IMAGE_ALLWED_EXTENSIONS);
                
        return $this->repository->add($title, $imagesUri, $text);
    }

    public function delete(int $id): \App\Models\CultureContent\Entities\CultureContent {
        return $this->repository->delete($id);
    }

    public function edit(\App\Models\Upload\Services\Service $uploadService, int $id, string $title, string $imageName, string $imagePath, string $text): \App\Models\CultureContent\Entities\CultureContent {
       
        if(!$title){
            throw new \Exception('title is required');
        }
        if(!$text){
            throw new \Exception('text is required');
        }
  
        $imagesUri = $uploadService->upload($imageName, $imagePath, \App\Config\Config::getFullUploadDir(), \App\Config\Config::$UPLOAD_IMAGE_ALLWED_EXTENSIONS);      
                
        return $this->repository->edit($id, $title, $imagesUri, $text);
    }

    public function get(int $id): \App\Models\CultureContent\Entities\CultureContent {
        return $this->repository->get($id);
    }

    public function initialize(): bool {
        $content = $this->repository->list(1);
        if(!$content){
            $this->repository->add('', '', '');
        }
        
        return true;
    }

    public function list(): array {
        $this->initialize();
        
        $content = $this->repository->list();
        
        return $content;
    }

}
