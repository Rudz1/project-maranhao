<?php

namespace App\Models\CultureContent\Services;

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
     * @param \App\Models\Upload\Services\Service $uploadService
     * @param string $title
     * @param string $imageName
     * @param string $imagePath
     * @param string $text
     * @return \App\Models\CultureContent\Entities\CultureContent
     */
    public function add(\App\Models\Upload\Services\Service $uploadService, string $title, string $imageName, string $imagePath, string $text): \App\Models\CultureContent\Entities\CultureContent;
    
    /**
     * 
     * @param \App\Models\Upload\Services\Service $uploadService
     * @param int $id
     * @param string $title
     * @param string $text
     * @return \App\Models\CultureContent\Entities\CultureContent
     */
    public function edit(\App\Models\Upload\Services\Service $uploadService, int $id, string $title, string $imageName, string $imagePath, string $text): \App\Models\CultureContent\Entities\CultureContent;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\CultureContent\Entities\CultureContent
     */
    public function get(int $id): \App\Models\CultureContent\Entities\CultureContent;
    
    /**
     * 
     * @return array
     */
    public function list(): array;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\CultureContent\Entities\CultureContent
     */
    public function delete(int $id): \App\Models\CultureContent\Entities\CultureContent;
    
    
}
