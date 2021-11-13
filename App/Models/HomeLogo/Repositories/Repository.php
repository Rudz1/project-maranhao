<?php

namespace App\Models\HomeLogo\Repositories;

/**
 * Description of Repository
 *
 * @author andre
 */
class Repository implements IRepository {
    
    private $con;
    
    public function __construct(\mysqli $con) {
        $this->con = $con;
    }

    
    public function edit(int $id, string $imageUri): \App\Models\HomeLogo\Entities\HomeLogo {
        
        $id = addslashes($id);
        $imageUri = addslashes($imageUri);
        
        $sql = "UPDATE logo SET logo_image_uri = '{$imageUri}' WHERE logo_id = ".$id;
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $this->get($id);
        
    }

    public function get(int $id): \App\Models\HomeLogo\Entities\HomeLogo {
        $id = addslashes($id);
        
        $sql = "SELECT * FROM logo WHERE logo_id = ".$id;
        $result = $this->con->query($sql);
       
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        $logos = $result->fetch_object();
        if($logos == null){
            throw new \Exception('logo not found');
        }
        
        $logoHome = new \App\Models\HomeLogo\Entities\HomeLogo((int)$logos->logo_id, $logos->logo_image_uri);
        
        return $logoHome;
    }

    public function initialize(): \App\Models\HomeLogo\Entities\HomeLogo {
        
        $sql = "INSERT INTO logo(logo_image_uri) VALUES ('') ";
        
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $this->get((int)$this->con->insert_id);
    }

    public function list(int $rowsQuantity = null): array {
        
        $sql = "SELECT * FROM logo ORDER BY logo_id DESC";
        
        if($rowsQuantity != null){
            $sql .= " LIMIT ".$rowsQuantity;
        }
              
        $result = $this->con->query($sql);
        $resources = [];
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        while ($resource = $result->fetch_object()){
            $resources[] = new \App\Models\HomeLogo\Entities\HomeLogo((int)$resource->logo_id, $resource->logo_image_uri);
        }
        
        return $resources;
        
    }

}
