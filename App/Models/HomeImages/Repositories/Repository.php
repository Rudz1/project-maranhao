<?php

namespace App\Models\HomeImages\Repositories;

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

    public function add(string $imageUri): \App\Models\HomeImages\Entities\HomeImages {
        
        $imageUri = addslashes($imageUri);
        
        $sql = "INSERT INTO home_images(home_images_uri) VALUES('{$imageUri}') ";
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }     
        
        return $this->get((int)$this->con->insert_id);
    }

    public function delete(int $id): \App\Models\HomeImages\Entities\HomeImages {
        
        $id = addslashes($id);
        $image = $this->get($id);
        
        $sql = "DELETE FROM home_images WHERE home_images_id = ".$id;
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $image;
    }

    public function edit(int $id, string $imageUri): \App\Models\HomeImages\Entities\HomeImages {
          
        $id = addslashes($id);
        $imageUri = addslashes($imageUri);
        
        $sql = "UPDATE home_images SET home_images_uri = '{$imageUri}' WHERE home_images_id = '{$id}'";
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $this->get($id);
    }

    public function get(int $id): \App\Models\HomeImages\Entities\HomeImages {
        
        $id = addslashes($id);
        
        $sql = "SELECT * FROM home_images WHERE home_images_id = ".$id;
        $result = $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        $image = $result->fetch_object();
        if($image == null){
            throw new \Exception('banner not found');
        }
        $imagesHome = new \App\Models\HomeImages\Entities\HomeImages((int)$image->home_images_id, $image->home_images_uri);
        
        return $imagesHome;
    }

    public function list(int $rowsQuantity = null): array {
        
        $sql = "SELECT * FROM home_images ORDER BY home_images_id DESC";
        if($rowsQuantity != null){
            $sql .= " LIMIT ".$rowsQuantity;
        }
        $result = $this->con->query($sql);
        $resources = [];
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        while ($resource = $result->fetch_object()){
            $resources[] = new \App\Models\HomeImages\Entities\HomeImages((int)$resource->home_images_id, $resource->home_images_uri);
        }
        
        return $resources;
    }

}
