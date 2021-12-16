<?php

namespace App\Models\FooterPages\Services;

/**
 * Description of IService
 *
 * @author andre
 */
interface IService {
    
    /**
     * 
     * @param string $page
     * @param string $link
     * @return \App\Models\FooterPages\Entities\FooterPages
     */
    public function create(string $page, string $link): \App\Models\FooterPages\Entities\FooterPages;
    
    /**
     * 
     * @param int $id
     * @param string $page
     * @param string $link
     * @return \App\Models\FooterPages\Entities\FooterPages
     */
    public function update(int $id, string $page, string $link): \App\Models\FooterPages\Entities\FooterPages;
    
    /**
     * 
     * @return bool
     */
    public function initialize(): bool;
    
    /**
     * 
     * @param type $id
     * @return \App\Models\FooterPages\Entities\FooterPages
     */
    public function get($id): \App\Models\FooterPages\Entities\FooterPages;
    
    /**
     * 
     * @return array
     */
    public function list(): array;
    
}
