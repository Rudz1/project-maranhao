<?php

namespace App\Models\TourismContent\Entities;

/**
 * Description of TourismContent
 *
 * @author andre
 */
class TourismContent {
    
    private $id;
    private $title;
    private $text;
    private $link;
    
    public function __construct($id, $title, $text, $link) {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->link = $link;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getText() {
        return $this->text;
    }

    public function getLink() {
        return $this->link;
    }



}
