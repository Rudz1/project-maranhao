<?php

namespace App\Models\HomeImages\Services;

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


    public function add(\App\Models\Upload\Services\IService $uploadService, string $imageName, string $imagePath): \App\Models\HomeImages\Entities\HomeImages {
  
        $imageUri = $uploadService->upload($imageName, $imagePath, \App\Config\Config::getFullUploadDir(), \App\Config\Config::$UPLOAD_IMAGE_ALLWED_EXTENSIONS);
        
        return $this->repository->add($imageUri);
    }

    public function delete(int $id): \App\Models\HomeImages\Entities\HomeImages {
        return $this->repository->delete($id);
    }

    public function edit(\App\Models\Upload\Services\IService $uploadService, int $id, string $imageName, string $imagePath): \App\Models\HomeImages\Entities\HomeImages {     
        
        $imageUri = $uploadService->upload($imageName, $imagePath, \App\Config\Config::getFullUploadDir(), \App\Config\Config::$UPLOAD_IMAGE_ALLWED_EXTENSIONS);
        
        return $this->repository->edit($id, $imageUri);
    }

    public function get(int $id): \App\Models\HomeImages\Entities\HomeImages {
        return $this->repository->get($id);
    }

    public function initialize(): bool {
        $image = $this->repository->list(1);
        if(!$image){
            $this->repository->add('');
        }
        
        return true;
    }

    public function list(): array {
        $this->initialize();
        
        $image = $this->repository->list();
        
        return $image;
        
    }

}
