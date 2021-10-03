<?php

namespace App\Models\HomeImages\Entities;

/**
 * Description of HomeImages
 *
 * @author andre
 */
class HomeImages {
    
    private $id;
    private $Uri;
    
    public function __construct($id, $Uri) {
        $this->id = $id;
        $this->Uri = $Uri;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getUri() {
        return $this->Uri;
    }

}
