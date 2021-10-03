<?php

namespace App\Models\BannerTourism\Repositories;

/**
 * Description of IRepository
 *
 * @author andre
 */
interface IRepository {
    
    /**
     * 
     * @param int $rowsQuantity
     * @return \App\Models\BannerTourism\Entities\BannerTourism[]
     */
    public function list(int $rowsQuantity = null): array;
    
    /**
     * 
     * @param int $id
     * @return \stdClass
     */
    public function get(int $id): \App\Models\BannerTourism\Entities\BannerTourism;
    
    /**
     * 
     * @param int $id
     * @param string $bannerUri
     * @return bool
     */
    public function edit(int $id, string $bannerUri, string $placeName): \App\Models\BannerTourism\Entities\BannerTourism;
    
    /**
     * 
     * @param string $bannerUri
     * @return bool
     */
    public function add(string $bannerUri, $placeName): \App\Models\BannerTourism\Entities\BannerTourism;
    
    /**
     * 
     * @param int $id
     * @return bool
     */
    public function delete(int $id): \App\Models\BannerTourism\Entities\BannerTourism;
    
}
