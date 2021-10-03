<?php

namespace App\Models\BannerTourism\Services;

/**
 * Description of Service
 *
 * @author andre
 */
class Service implements IService{
    
    private $repository;
    
    public function __construct(\App\Models\BannerTourism\Repositories\IRepository $repository) {
        $this->repository = $repository;
    }
    
    public function add(\App\Models\Upload\Services\IService $uploadService, string $bannerName, string $bannerPath, string $placeName): \App\Models\BannerTourism\Entities\BannerTourism {
        
        if(!$placeName){
            throw new Exception('place name is required');
        }
        
        $bannerUri = $uploadService->upload($bannerName, $bannerPath, \App\Config\Config::getFullUploadDir(), \App\Config\Config::$UPLOAD_IMAGE_ALLWED_EXTENSIONS);
        
        return $this->repository->add($bannerUri, $placeName);
    }

    public function delete(int $id): \App\Models\BannerTourism\Entities\BannerTourism {
        return $this->repository->delete($id);
    }

    public function edit(\App\Models\Upload\Services\IService $uploadService, int $id, string $bannerName, string $bannerPath, string $placeName): \App\Models\BannerTourism\Entities\BannerTourism {
        
        if(!$placeName){
            throw new Exception('place name is required');
        }
        
        $bannerUri = $uploadService->upload($bannerName, $bannerPath, \App\Config\Config::getFullUploadDir(), \App\Config\Config::$UPLOAD_IMAGE_ALLWED_EXTENSIONS);
        
        return $this->repository->edit($id, $bannerUri, $placeName);
    }

    public function get(int $id): \App\Models\BannerTourism\Entities\BannerTourism {
        return $this->repository->get($id);
    }

    public function initialize(): bool {
        
        $banner = $this->repository->list(1);
        if(!$banner){
            $this->repository->add('', '');
        }
        
        return true;
        
    }

    public function list(): array {
        
        $this->initialize();
        
        $banner = $this->repository->list();
        
        return $banner;
    }

}
