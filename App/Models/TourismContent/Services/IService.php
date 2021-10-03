<?php

namespace App\Models\TourismContent\Services;

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
     * @param string $title
     * @param string $text
     * @param string $link
     * @return \App\Models\TourismContent\Entities\TourismContent
     */
    public function add(string $title,string $text, string $link): \App\Models\TourismContent\Entities\TourismContent;
    
    /**
     * 
     * @param int $id
     * @param string $title
     * @param string $text
     * @param string $link
     * @return \App\Models\TourismContent\Entities\TourismContent
     */
    public function edit(int $id, string $title, string $text, string $link): \App\Models\TourismContent\Entities\TourismContent;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\TourismContent\Entities\TourismContent
     */
    public function get(int $id): \App\Models\TourismContent\Entities\TourismContent;
    
    /**
     * 
     * @return \App\Models\TourismContent\Entities\TourismContent[]
     */
    public function list(): array;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\TourismContent\Entities\TourismContent
     */
    public function delete(int $id): \App\Models\TourismContent\Entities\TourismContent;
    
    
}
