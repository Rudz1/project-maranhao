<?php

namespace App\Models\FooterContact\Entities;

/**
 * Description of FooterContact
 *
 * @author andre
 */
class FooterContact {
    
    private $id;
    private $address;
    private $email;
    private $telephone;
    
    /**
     * 
     * @param type $id
     * @param type $address
     * @param type $email
     * @param type $telephone
     */
    
    public function __construct($id, $address, $email, $telephone) {
        $this->id = $id;
        $this->address = $address;
        $this->email = $email;
        $this->telephone = $telephone;
    }
    
    /**
     * 
     * @return type
     */
    
    public function getId() {
        return $this->id;
    }
    
    /**
     * 
     * @return type
     */
    public function getAddress() {
        return $this->address;
    }
    
    /**
     * 
     * @return type
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * 
     * @return type
     */
    public function getTelephone() {
        return $this->telephone;
    }



    
}
