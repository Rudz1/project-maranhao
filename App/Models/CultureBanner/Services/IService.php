<?php

namespace App\Models\CultureBanner\Services;

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
    public function initialize(): string;
    
    /**
     * 
     * @param \App\Models\Upload\Services\IService $uploadService
     * @param int $id
     * @param string $bannerName
     * @param string $bannerPath
     * @return \App\Models\CultureBanner\Entities\CultureBanner
     */
    public function edit(\App\Models\Upload\Services\IService $uploadService, int $id, string $bannerName, string $bannerPath): \App\Models\CultureBanner\Entities\CultureBanner;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\CultureBanner\Entities\CultureBanner
     */
    public function get(int $id): \App\Models\CultureBanner\Entities\CultureBanner;
   
    /**
     * 
     * @return \App\Models\CultureBanner\Entities\CultureBanner[];
     */
    public function list(): array;
    
}
