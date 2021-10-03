<?php

namespace App\Models\CultureBanner\Repositories;

/**
 * Description of Repository
 *
 * @author andre
 */

class Repository implements IRepository {
    
    private $con;
    
    public function __construct($con) {
        $this->con = $con;
    }

    public function edit(int $id, string $imageUri): \App\Models\CultureBanner\Entities\CultureBanner {
        
        $id = addslashes($id);
        $imageUri = addslashes($imageUri);
        
        $sql = "UPDATE culture_banner SET banner_image_uri = '{$imageUri}' WHERE banner_id = '{$id}'";
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $this->get($id);
        
    }

    public function get(int $id): \App\Models\CultureBanner\Entities\CultureBanner {
        
        $id = addslashes($id);
        
        $sql = "SELECT * FROM culture_banner WHERE banner_id = ".$id;
        $result = $this->con->query($sql);
       
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        $banner = $result->fetch_object();
        if($banner == null){
            throw new \Exception('banner not found');
        }
        
        $bannerCulture = new \App\Models\CultureBanner\Entities\CultureBanner((int)$banner->banner_id, $banner->banner_image_uri);
        
        return $bannerCulture;
        
    }

    public function initialize(): \App\Models\CultureBanner\Entities\CultureBanner {
        $sql = "INSERT INTO culture_banner(banner_image_uri) VALUES ('') ";
        
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $this->get((int)$this->con->insert_id);
    }

    public function list(int $rowsQuantity = null): array {
        
        $sql = "SELECT * FROM culture_banner ORDER BY banner_id DESC";
        
        if($rowsQuantity != null){
            $sql .= " LIMIT ".$rowsQuantity;
        }
              
        $result = $this->con->query($sql);
        $banners = [];
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        while ($banner = $result->fetch_object()){
            $banners[] = new \App\Models\CultureBanner\Entities\CultureBanner((int)$banner->banner_id, $banner->banner_image_uri);
        }
        
        return $banners;
    }

}
