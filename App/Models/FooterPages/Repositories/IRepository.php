<?php

namespace App\Models\FooterPages\Repositories;

/**
 * Description of IRepository
 *
 * @author andre
 */
interface IRepository {
    
    /**
     * 
     * @param int $rowsQuantity
     * @return \App\Models\FooterPages\Entities\FooterPages
     */
    public function list(int $rowsQuantity = null): array;
    
    /**
     * 
     * @param string $page
     * @param string $link
     * @return \App\Models\FooterPages\Entities\FooterPages
     */
    public function create(string $page, string $link): \App\Models\FooterPages\Entities\FooterPages;
    
    /**
     * 
     * @param type $id
     * @return \App\Models\FooterPages\Entities\FooterPages
     */
    public function get($id): \App\Models\FooterPages\Entities\FooterPages;

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
     * @param int $id
     * @return \App\Models\FooterPages\Entities\FooterPages
     */
    public function delete(int $id): \App\Models\FooterPages\Entities\FooterPages;
    
    
}
