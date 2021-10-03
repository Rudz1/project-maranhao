<?php

namespace App\Models\CultureBanner\Entities;

/**
 * Description of CultureBanner
 *
 * @author andre
 */
class CultureBanner {
    
    private $id;
    private $uri;
    
    public function __construct($id, $uri) {
        $this->id = $id;
        $this->uri = $uri;
    }

    public function getId() {
        return $this->id;
    }

    public function getUri() {
        return $this->uri;
    }


    
}
