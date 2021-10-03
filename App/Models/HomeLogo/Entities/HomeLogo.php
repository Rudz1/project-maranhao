<?php

namespace App\Models\HomeLogo\Entities;

/**
 * Description of HomeLogo
 *
 * @author andre
 */
class HomeLogo {

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
