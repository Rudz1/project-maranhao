<?php

namespace App\Models\TourismContent\Repositories;

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

    public function add(string $title, string $text, string $link): \App\Models\TourismContent\Entities\TourismContent {
        
        $title = addslashes($title);
        $text = addslashes($text);
        $link = addslashes($link);
        
        $sql = "INSERT INTO tourism_content(title, text, link) VALUES('{$title}', '{$text}', '{$link}')";
        
        $this->con->query($sql);
        if($this->con->error){
            throw  new \Exception($this->con->error);  
        }
        
        return $this->get((int)$this->con->insert_id);
    }

    public function delete(int $id): \App\Models\TourismContent\Entities\TourismContent {
        
        $id = addslashes($id);
        $content = $this->get($id);
            
        $sql = "DELETE FROM tourism_content WHERE content_id =".$id;
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        } 
        
        return $content;
        
    }

    public function edit(int $id, string $title, string $text, string $link): \App\Models\TourismContent\Entities\TourismContent {
        
        $id = addslashes($id);
        $title = addslashes($title);
        $text = addslashes($text);
        $link = addslashes($link);
        
        $sql = "UPDATE tourism_content SET title = '{$title}', text = '{$text}', link = '{$link}' WHERE content_id = ".$id;
        
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $this->get($id);     
    }

    public function get(int $id): \App\Models\TourismContent\Entities\TourismContent {
        
        $id = addslashes($id);
        
        $sql = "SELECT * FROM tourism_content WHERE content_id = ".$id;
        $result = $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        $content = $result->fetch_object();
        if($content == null){
            throw new \Exception('content is null');
        }
        
        $contentTourism = new \App\Models\TourismContent\Entities\TourismContent((int)$content->content_id, $content->title, $content->text, $content->link);
        
        return $contentTourism;
    }

    public function list(int $rowsQuantity = null): array {
        
        $sql = "SELECT * FROM tourism_content ORDER BY content_id DESC";
        if($rowsQuantity != null){
            $sql .= " LIMIT ".$rowsQuantity;
        }
        $result = $this->con->query($sql);
        $contents = [];
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        while ($content = $result->fetch_object()){
            $contents[] = new \App\Models\TourismContent\Entities\TourismContent((int)$content->content_id, $content->title, $content->text, $content->link);
        }
        
        return $contents;
    }

}
