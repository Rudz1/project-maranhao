<?php

namespace App\Models\HomeImages\Repositories;

/**
 * Description of IRepository
 *
 * @author andre
 */
interface IRepository {
    
     /**
     * 
     * @param int $rowsQuantity
     * @return \App\Models\HomeImages\Entities\HomeImages[]
     */
    public function list(int $rowsQuantity = null): array;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\HomeImages\Entities\HomeImages
     */
    public function get(int $id): \App\Models\HomeImages\Entities\HomeImages;
    
    /**
     * 
     * @param int $id
     * @param string $bannerUri
     * @return \App\Models\HomeImages\Entities\HomeImages
     */
    public function edit(int $id, string $imageUri): \App\Models\HomeImages\Entities\HomeImages;
    
    /**
     * 
     * @param string $bannerUri
     * @return \App\Models\HomeImages\Entities\HomeImages
     */
    public function add(string $imageUri): \App\Models\HomeImages\Entities\HomeImages;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\HomeImages\Entities\HomeImages
     */
    public function delete(int $id): \App\Models\HomeImages\Entities\HomeImages;
    
}
