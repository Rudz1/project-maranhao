<?php

namespace App\Models\HomeBanner\Repositories;

/**
 * Description of Repository
 *
 * @author andre
 */
class Repository implements IRepository{
    
    private $con;
    
    public function __construct(\mysqli $con) {
        $this->con = $con;
    }

    
    public function edit(int $id, string $bannerImageuri): \App\Models\HomeBanner\Entities\HomeBanner {
        
        $bannerImageuri = addslashes($bannerImageuri);
        
        $sql = "UPDATE home_banner SET home_banner_uri = '{$bannerImageuri}' WHERE home_banner_id = ".$id;
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $this->get($id);
    }

    public function get(int $id): \App\Models\HomeBanner\Entities\HomeBanner {
        
        $id = addslashes($id);
        
        $sql = "SELECT * FROM home_banner WHERE home_banner_id = ".$id;
        $result = $this->con->query($sql);
       
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        $banner = $result->fetch_object();
        if($banner == null){
            throw new \Exception('banner not found');
        }
        
        $bannerHome = new \App\Models\HomeBanner\Entities\HomeBanner((int)$banner->home_banner_id, $banner->home_banner_uri);
        
        return $bannerHome;
    }

    public function initialize(): \App\Models\HomeBanner\Entities\HomeBanner {
        $sql = "INSERT INTO home_banner(home_banner_uri) VALUES ('') ";
        
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $this->get((int)$this->con->insert_id);
    }

    public function list(int $rowsQuantity = null): array {
        $sql = "SELECT * FROM home_banner ORDER BY home_banner_id DESC";
        
        if($rowsQuantity != null){
            $sql .= " LIMIT ".$rowsQuantity;
        }
              
        $result = $this->con->query($sql);
        $resources = [];
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        while ($resource = $result->fetch_object()){
            $resources[] = new \App\Models\HomeBanner\Entities\HomeBanner((int)$resource->home_banner_id, $resource->home_banner_uri);;
        }
        
        return $resources;
    }

    public function add(string $bannerImageuri): \App\Models\HomeBanner\Entities\HomeBanner {
        
        $bannerImageuri = addslashes($bannerImageuri);
        
        $sql = "INSERT INTO home_banner(home_banner_uri) VALUES ('{$bannerImageuri}')";
        
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $this->get((int)$this->con->insert_id);
        
    }

    public function delete(int $id): \App\Models\HomeBanner\Entities\HomeBanner {
        
        $id = addslashes($id);
        $banner = $this->get($id);
        
        $sql = "DELETE FROM home_banner WHERE home_banner_id = ".$id;
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $banner;
    }

}
