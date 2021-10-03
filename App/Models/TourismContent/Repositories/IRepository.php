<?php

namespace App\Models\TourismContent\Repositories;

/**
 * Description of IRepository
 *
 * @author andre
 */
interface IRepository {
    
    /**
     * 
     * @param string $title
     * @param string $text
     * @param string $link
     * @return \App\Models\TourismContent\Entities\TourismContent
     */
    public function add(string $title, string $text, string $link): \App\Models\TourismContent\Entities\TourismContent;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\TourismContent\Entities\TourismContent
     */
    public function get(int $id): \App\Models\TourismContent\Entities\TourismContent;
    
    /**
     * 
     * @param int $rowsQuantity
     * @return \App\Models\TourismContent\Entities\TourismContent[]
     */
    public function list(int $rowsQuantity = null): array;
    
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
    public function delete(int $id): \App\Models\TourismContent\Entities\TourismContent;
    
}
