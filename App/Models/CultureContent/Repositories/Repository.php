<?php

namespace App\Models\CultureContent\Repositories;

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

    public function add(string $title, string $imageUri, string $text): \App\Models\CultureContent\Entities\CultureContent {
        
        $title = addslashes($title);
        $imageUri = addslashes($imageUri);
        $text = addslashes($text); 
        
        $sql = "INSERT INTO culture_content(content_title, content_image_uri, content_text) VALUES('{$title}', '{$imageUri}', '{$text}')";
        
        $this->con->query($sql);
        if($this->con->error){
            throw  new \Exception($this->con->error);  
        }
        
        return $this->get((int)$this->con->insert_id);
    }

    public function delete(int $id): \App\Models\CultureContent\Entities\CultureContent {
        
        $id = addslashes($id);
        $content = $this->get($id);
            
        $sql = "DELETE FROM culture_content WHERE content_id =".$id;
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        } 
        
        return $content;
        
    }

    public function edit(int $id, string $title, string $imageUri, string $text): \App\Models\CultureContent\Entities\CultureContent {
        
        $id = addslashes($id);
        $title = addslashes($title);
        $text = addslashes($text);
        $imageUri = addslashes($imageUri);
        
        $sql = "UPDATE culture_content SET content_title = '{$title}', content_image_uri = '{$imageUri}', content_text = '{$text}' WHERE content_id = ".$id;
        
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $this->get($id);     
    }

    public function get(int $id): \App\Models\CultureContent\Entities\CultureContent {
        
        $id = addslashes($id);
        
        $sql = "SELECT * FROM culture_content WHERE content_id = ".$id;
        $result = $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        $content = $result->fetch_object();
        if($content == null){
            throw new \Exception('content is null');
        }
        
        $contentCulture = new \App\Models\CultureContent\Entities\CultureContent((int)$content->content_id, $content->content_title, $content->content_image_uri, $content->content_text);
        
        return $contentCulture;
    }

    public function list(int $rowsQuantity = null): array {
        
        $sql = "SELECT * FROM culture_content ORDER BY content_id DESC";
        if($rowsQuantity != null){
            $sql .= " LIMIT ".$rowsQuantity;
        }
        $result = $this->con->query($sql);
        $contents = [];
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        while ($content = $result->fetch_object()){
            $contents[] = new \App\Models\CultureContent\Entities\CultureContent((int)$content->content_id, $content->content_title, $content->content_image_uri, $content->content_text);
        }
        
        return $contents;
    }
}
