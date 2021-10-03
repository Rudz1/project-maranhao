<?php

namespace App\Models\HomeBanner\Services;

/**
 * Description of Service
 *
 * @author andre
 */
class Service implements IService {
    
    private $repository;

    public function __construct(\App\Models\HomeBanner\Repositories\IRepository $repository) {
        $this->repository = $repository;
    }

    public function edit(\App\Models\Upload\Services\IService $uploadService, int $id, string $bannerName, string $bannerPath): \App\Models\HomeBanner\Entities\HomeBanner {
        
        $bannerUri = $uploadService->upload($bannerName, $bannerPath, \App\Config\Config::getFullUploadDir(), \App\Config\Config::$UPLOAD_IMAGE_ALLWED_EXTENSIONS);
        
        return $this->repository->edit($id, $bannerUri);
    }

    public function get(int $id): \App\Models\HomeBanner\Entities\HomeBanner {
         return $this->repository->get($id);
    }

    public function initialize(): bool {
        $banner = $this->repository->list(1);
        if(!$banner){
            $this->repository->add('');
        }
        
        return true;
    }

    public function list(): array {
        
        $this->initialize();
        
        $banner = $this->repository->list();
        
        return $banner;
   
    }

    public function add(\App\Models\Upload\Services\IService $uploadService, string $imageName, string $imagePath): \App\Models\HomeBanner\Entities\HomeBanner {
         
        $imageUri = $uploadService->upload($imageName, $imagePath, \App\Config\Config::getFullUploadDir(), \App\Config\Config::$UPLOAD_IMAGE_ALLWED_EXTENSIONS);
        
        return $this->repository->add($imageUri);
    }

    public function delete(int $id): \App\Models\HomeBanner\Entities\HomeBanner {
        return $this->repository->delete($id);
    }

}
