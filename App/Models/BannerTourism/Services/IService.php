<?php

namespace App\Models\BannerTourism\Services;

/**
 * Description of IService
 *
 * @author andre
 */
interface IService {
   
    /**
     * 
     * @return \App\Models\BannerTourism\Entities\BannerTourism
     */
    public function initialize(): bool;
    
    /**
     * 
     * @param \App\Services\UploadService $uploadService
     * @param string $bannerName
     * @param string $bannerPath
     * @param string $placeName
     * @return \App\Models\BannerTourism\Entities\BannerTourism
     */
    public function add(\App\Models\Upload\Services\IService $uploadService, string $bannerName,string $bannerPath, string $placeName): \App\Models\BannerTourism\Entities\BannerTourism;
    
    /**
     * 
     * @param \App\Services\UploadService $uploadService
     * @param int $id
     * @param string $bannerName
     * @param string $bannerPath
     * @param string $placeName
     * @return \App\Models\BannerTourism\Entities\BannerTourism
     */
    public function edit(\App\Models\Upload\Services\IService $uploadService, int $id, string $bannerName,string $bannerPath, string $placeName): \App\Models\BannerTourism\Entities\BannerTourism;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\BannerTourism\Entities\BannerTourism
     */
    public function get(int $id): \App\Models\BannerTourism\Entities\BannerTourism;
    
    /**
     * 
     * @return \App\Models\BannerTourism\Entities\BannerTourism[]
     */
    public function list(): array;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\BannerTourism\Entities\BannerTourism
     */
    public function delete(int $id): \App\Models\BannerTourism\Entities\BannerTourism;
    
    
}
