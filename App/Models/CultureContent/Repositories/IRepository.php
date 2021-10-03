<?php

namespace App\Models\CultureContent\Repositories;

/**
 * Description of IRepository
 *
 * @author andre
 */
interface IRepository {
    
    /**
     * 
     * @param string $title
     * @param string $imageUri
     * @param string $text
     * @return \App\Models\CultureContent\Entities\CultureContent
     */
    public function add(string $title, string $imageUri, string $text): \App\Models\CultureContent\Entities\CultureContent;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\CultureContent\Entities\CultureContent
     */
    public function get(int $id): \App\Models\CultureContent\Entities\CultureContent;
    
    /**
     * 
     * @param int $rowsQuantity
     * @return \App\Models\CultureContent\Entities\CultureContent[]
     */
    public function list(int $rowsQuantity = null): array;
    
    /**
     * 
     * @param int $id
     * @param string $title
     * @param string $text
     * @param string $link
     * @return \App\Models\CultureContent\Entities\CultureContent
     */
    public function edit(int $id, string $title, string $text, string $link): \App\Models\CultureContent\Entities\CultureContent;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\CultureContent\Entities\CultureContent
     */
    public function delete(int $id): \App\Models\CultureContent\Entities\CultureContent;
}
