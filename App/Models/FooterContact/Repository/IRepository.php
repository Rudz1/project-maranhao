<?php

namespace App\Models\FooterContact\Repository;

/**
 * Description of IRepository
 *
 * @author andre
 */
interface IRepository {
    
    /**
     * 
     * @param int $rowsQuantity
     * @return array
     */
    public function list(int $rowsQuantity = null): array;
    
    /**
     * 
     * @param int $id
     * @param string $address
     * @param string $email
     * @param string $telephone
     * @return \App\Models\FooterContact\Entities\FooterContact
     */
    public function edit(int $id, string $address, string $email, string $telephone): \App\Models\FooterContact\Entities\FooterContact;
    
    /**
     * 
     * @return \App\Models\FooterContact\Entities\FooterContact
     */
    public function initialize(): \App\Models\FooterContact\Entities\FooterContact;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\FooterContact\Entities\FooterContact
     */
    public function get(int $id): \App\Models\FooterContact\Entities\FooterContact;
}
