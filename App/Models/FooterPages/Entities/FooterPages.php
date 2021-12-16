<?php

namespace App\Models\FooterPages\Entities;

/**
 * Description of FooterPages
 *
 * @author andre
 */
class FooterPages {
    
    private $id;
    private $page;
    private $link;
    
    public function __construct($id, $page, $link) {
        $this->id = $id;
        $this->page = $page;
        $this->link = $link;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getPage() {
        return $this->page;
    }

    public function getLink() {
        return $this->link;
    }



    
    
}
