<?php

namespace App\Models\FooterContact\Services;

/**
 * Description of IService
 *
 * @author andre
 */

interface IService {
    
    /**
     * 
     * @return array
     */
    public function list(): array;
    
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
     * @param int $id
     * @return \App\Models\FooterContact\Entities\FooterContact
     */
    public function get(int $id): \App\Models\FooterContact\Entities\FooterContact;
    
    /**
     * 
     * @return bool
     */
    public function initialize(): bool;
    
}
