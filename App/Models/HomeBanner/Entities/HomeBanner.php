<?php

namespace App\Models\HomeBanner\Entities;

/**
 * Description of HomeBanner
 *
 * @author andre
 */
class HomeBanner {
    
    private $id;
    private $uri;
    
    /**
     * 
     * @param type $id
     * @param type $uri
     */
    public function __construct($id, $uri) {
        $this->id = $id;
        $this->uri = $uri;
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
    public function getUri() {
        return $this->uri;
    }



    
}
