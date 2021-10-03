<?php

namespace App\Models\HomeBanner\Repositories;

/**
 * Description of IRepository
 *
 * @author andre
 */
interface IRepository {
    
    /**
     * 
     * @param string $bannerImageuri
     * @return \App\Models\HomeBanner\Entities\HomeBanner
     */
    public function add(string $bannerImageuri): \App\Models\HomeBanner\Entities\HomeBanner;
    
     /**
     * 
     * @param int $id
     * @param string $bannerImageuri
     * @return bool
     */
    public function edit(int $id, string $bannerImageuri): \App\Models\HomeBanner\Entities\HomeBanner;
 
    /**
     * 
     * @param int $id
     * @return \stdClass
     */
    public function get(int $id): \App\Models\HomeBanner\Entities\HomeBanner;
    
    /**
     * 
     * @return array
     */
    public function list(int $rowsQuantity = null): array;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\HomeBanner\Entities\HomeBanner
     */
    public function delete(int $id): \App\Models\HomeBanner\Entities\HomeBanner;
    
}
