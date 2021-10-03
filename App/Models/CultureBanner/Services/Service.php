<?php

namespace App\Models\CultureBanner\Services;

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

    public function edit(\App\Models\Upload\Services\IService $uploadService, int $id, string $bannerName, string $bannerPath): \App\Models\CultureBanner\Entities\CultureBanner {
        
        $bannerUri = $uploadService->upload($bannerName, $bannerPath, \App\Config\Config::getFullUploadDir(), \App\Config\Config::$UPLOAD_IMAGE_ALLWED_EXTENSIONS);
        
        return $this->repository->edit($id, $bannerUri);
        
    }

    public function get(int $id): \App\Models\CultureBanner\Entities\CultureBanner {
         return $this->repository->get($id);
    }

    public function initialize(): string {
        $banner = $this->repository->list(1);
        if(!$banner){
            return $this->repository->initialize();
        }
        
        return '';
    }

    public function list(): array {
        $this->initialize();
        
        $banner = $this->repository->list();
        
        return $banner;
    }

}
