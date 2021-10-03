<?php

namespace App\Models\BannerTourism\Repositories;

/**
 * Description of Repository
 *
 * @author andre
 */
class Repository implements IRepository {
    
    private $con;
    
    public function __construct(\mysqli$con) {
        $this->con = $con;
    }
 
    public function add(string $bannerUri, $placeName): \App\Models\BannerTourism\Entities\BannerTourism {
        
        $bannerUri = addslashes($bannerUri);
        $placeName = addslashes($placeName);
        
        $sql = "INSERT INTO banner_tourism(banner_image_uri, place_name) VALUES('{$bannerUri}', '{$placeName}' ) ";
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }     
        
        return $this->get((int)$this->con->insert_id);
    }

    public function delete(int $id): \App\Models\BannerTourism\Entities\BannerTourism {
        
        
        $id = addslashes($id);
        $banner = $this->get($id);
        
        $sql = "DELETE FROM banner_tourism WHERE banner_id = ".$id;
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $banner;
    }

    public function edit(int $id, string $bannerUri, $placeName): \App\Models\BannerTourism\Entities\BannerTourism {
        
        $id = addslashes($id);
        $bannerUri = addslashes($bannerUri);
        $placeName = addslashes($placeName);
        
        $sql = "UPDATE banner_tourism SET banner_image_uri = '{$bannerUri}', place_name = '{$placeName}' WHERE banner_id = ".$id;
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->query);
        }
        
        return $this->get($id);
        
    }

    public function get(int $id): \App\Models\BannerTourism\Entities\BannerTourism {
        
        $id = addslashes($id);
        
        $sql = "SELECT * FROM banner_tourism WHERE banner_id = ".$id;
        $result = $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        $banner = $result->fetch_object();
        if($banner == null){
            throw new \Exception('banner not found');
        }
        $bannerTourism = new \App\Models\BannerTourism\Entities\BannerTourism($banner->banner_id, $banner->banner_image_uri, $banner->place_name);
        
        return $bannerTourism;
    }

        
    public function list(int $rowsQuantity = null): array {
        $sql = "SELECT * FROM banner_tourism ORDER BY banner_id DESC";
        if($rowsQuantity != null){
            $sql .= " LIMIT ".$rowsQuantity;
        }
        $result = $this->con->query($sql);
        $resources = [];
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        while ($resource = $result->fetch_object()){
            $resources[] = new \App\Models\BannerTourism\Entities\BannerTourism((int)$resource->banner_id, $resource->banner_image_uri, $resource->place_name);
        }
        
        return $resources;
    }

}
