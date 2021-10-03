<?php

namespace App\Models\HomeBanner\Services;

/**
 * Description of IService
 *
 * @author andre
 */
interface IService {
    
    /**
     * 
     * @return bool
     */
    public function initialize(): bool;
    
    /**
     * 
     * @param \App\Services\UploadService $uploadService
     * @param int $id
     * @param string $bannerName
     * @param string $bannerPath
     * @return \App\Models\BannerTourism\Entities\BannerTourism
     */
    public function edit(\App\Models\Upload\Services\IService $uploadService, int $id, string $bannerName, string $bannerPath): \App\Models\HomeBanner\Entities\HomeBanner;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\BannerTourism\Entities\BannerTourism
     */
    public function get(int $id): \App\Models\HomeBanner\Entities\HomeBanner;
    
    /**
     * 
     * @return \App\Models\BannerTourism\Entities\BannerTourism[]
     */
    public function list(): array;
    
    /**
     * 
     * @param string $imageName
     * @param string $imagePath
     * @return \App\Models\HomeBanner\Entities\HomeBanner
     */
    public function add(\App\Models\Upload\Services\IService $uploadService, string $imageName, string $imagePath): \App\Models\HomeBanner\Entities\HomeBanner;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\HomeBanner\Entities\HomeBanner
     */
    public function delete(int $id): \App\Models\HomeBanner\Entities\HomeBanner;
       
}
