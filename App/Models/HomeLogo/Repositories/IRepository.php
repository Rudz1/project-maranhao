<?php

namespace App\Models\HomeLogo\Repositories;

/**
 * Description of IRepository
 *
 * @author andre
 */
interface IRepository {
    
    /**
     * 
     * @return \App\Models\HomeLogo\Entities\HomeLogo
     */
    public function initialize(): \App\Models\HomeLogo\Entities\HomeLogo;
    
    /**
     * 
     * @param int $id
     * @param string $imageUri
     * @return \App\Models\HomeLogo\Entities\HomeLogo
     */
    public function edit(int $id, string $imageUri): \App\Models\HomeLogo\Entities\HomeLogo;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\HomeLogo\Entities\HomeLogo
     */
    public function get(int $id): \App\Models\HomeLogo\Entities\HomeLogo;
    
    /**
     * 
     * @param int $rowsQuantity
     * @return array
     */
    public function list(int $rowsQuantity = null ): array;
    
}
