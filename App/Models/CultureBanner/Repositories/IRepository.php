<?php

namespace App\Models\CultureBanner\Repositories;

/**
 * Description of IRepository
 *
 * @author andre
 */
interface IRepository {
    
    /**
     * 
     * @return \App\Models\CultureBanner\Entities\CultureBanner
     */
    public function initialize(): \App\Models\CultureBanner\Entities\CultureBanner;
    
    /**
     * 
     * @param int $rowsQuantity
     * @return \App\Models\CultureBanner\Entities\CultureBanner[]
     */
    public function list(int $rowsQuantity = null): array;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\CultureBanner\Entities\CultureBanner
     */
    public function get(int $id): \App\Models\CultureBanner\Entities\CultureBanner;
    
    /**
     * 
     * @param int $id
     * @param string $imageUri
     * @return \App\Models\CultureBanner\Entities\CultureBanner
     */
    public function edit(int $id, string $imageUri): \App\Models\CultureBanner\Entities\CultureBanner;
}
