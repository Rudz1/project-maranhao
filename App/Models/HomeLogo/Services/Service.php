<?php

namespace App\Models\HomeLogo\Services;

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
  
    public function edit(\App\Models\Upload\Services\IService $uploadService, int $id, string $imageName, string $imagePath): \App\Models\HomeLogo\Entities\HomeLogo {
        
        $imageUri = $uploadService->upload($imageName, $imagePath, \App\Config\Config::getFullUploadDir(), \App\Config\Config::$UPLOAD_IMAGE_ALLWED_EXTENSIONS);
        
        return $this->repository->edit($id, $imageUri);
    }

    public function get(int $id): \App\Models\HomeLogo\Entities\HomeLogo {
        return $this->repository->get($id);
    }

    public function initialize(): string {
        $logo = $this->repository->list(1);
        if(!$logo){
            return $this->repository->initialize();
        }
        
        return '';
    }

    public function list(): array {
        $this->initialize();
        
        $logo = $this->repository->list();
        
        return $logo;
    }

}
