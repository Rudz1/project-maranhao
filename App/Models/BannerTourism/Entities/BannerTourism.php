<?php

namespace App\Models\BannerTourism\Entities;

/**
 * Description of BannerTourism
 *
 * @author andre
 */
class BannerTourism {
    
    private $id;
    private $uri;
    private $placeName;
    
    /**
     * 
     * @param int $id
     * @param string $uri
     * @param string $placeName
     */
    public function __construct(int $id,string $uri, string $placeName) {
        $this->id = $id;
        $this->uri = $uri;
        $this->placeName = $placeName;
    }

    /**
     * 
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }
    
    /**
     * 
     * @return string
     */
    public function getUri(): string {
        return $this->uri;
    }
    
    /**
     * 
     * @return string
     */
    public function getPlaceName(): string {
        return $this->placeName;
    }


}
