<?php

namespace App\Models\HomeLogo\Services;

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
     * @param string $imageName
     * @param string $imagePath
     * @return \App\Models\HomeLogo\Entities\HomeLogo
     */
    public function edit(\App\Models\Upload\Services\IService $uploadService, int $id, string $imageName, string $imagePath): \App\Models\HomeLogo\Entities\HomeLogo;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\HomeLogo\Entities\HomeLogo
     */
    public function get(int $id): \App\Models\HomeLogo\Entities\HomeLogo;
    
    /**
     * 
     * @return array
     */
    public function list(): array;
    
}
