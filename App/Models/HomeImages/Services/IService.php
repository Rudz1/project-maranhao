<?php

namespace App\Models\HomeImages\Services;

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
     * @param \App\Models\Upload\Services\IService $uploadService
     * @param string $imageName
     * @param string $imagePath
     * @return \App\Models\HomeImages\Entities\HomeImages
     */
    public function add(\App\Models\Upload\Services\IService $uploadService, string $imageName,string $imagePath): \App\Models\HomeImages\Entities\HomeImages;
    
    /**
     * 
     * @param \App\Models\Upload\Services\IService $uploadService
     * @param int $id
     * @param string $imageName
     * @param string $imagePath
     * @return \App\Models\HomeImages\Entities\HomeImages
     */
    public function edit(\App\Models\Upload\Services\IService $uploadService, int $id, string $imageName,string $imagePath): \App\Models\HomeImages\Entities\HomeImages;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\HomeImages\Entities\HomeImages
     */
    public function get(int $id): \App\Models\HomeImages\Entities\HomeImages;
    
    /**
     * 
     * @return \App\Models\HomeImages\Entities\HomeImages[]
     */
    public function list(): array;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\HomeImages\Entities\HomeImages
     */
    public function delete(int $id): \App\Models\HomeImages\Entities\HomeImages;
}
