<?php

namespace App\Models\CultureContent\Entities;

/**
 * Description of CultureContent
 *
 * @author andre
 */
class CultureContent {
    
    private $id;
    private $title;
    private $uri;
    private $text;

    public function __construct($id, $title, $uri, $text) {
        $this->id = $id;
        $this->title = $title;
        $this->uri = $uri;
        $this->text = $text;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getUri() {
        return $this->uri;
    }

    public function getText() {
        return $this->text;
    }


}
