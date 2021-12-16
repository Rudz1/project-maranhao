<?php

namespace App\Models\FooterPages\Repositories;

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

    public function create(string $page, string $link): \App\Models\FooterPages\Entities\FooterPages {

        $page = addslashes($page);
        $link = addslashes($link);

        $sql = "INSERT INTO footer_pages(page, link) VALUES ('{$page}', '{$link}') ";
        $this->con->query($sql);
        if ($this->con->error) {
            throw new \Exception($this->con->error);
        }

        return $this->get((int)$this->con->insert_id);
    }

    public function get($id): \App\Models\FooterPages\Entities\FooterPages {
        
        $id = addslashes($id);
        
        $sql = "SELECT * FROM footer_pages WHERE id = " . $id;
        $result = $this->con->query($sql);
        if ($this->con->error) {
            throw new \Exception($this->con->error);
        }
        $page = $result->fetch_object();
        if ($page == null) {
            throw new \Exception('page is null');
        }
        $footerPages = new \App\Models\FooterPages\Entities\FooterPages((int) $page->id, $page->page, $page->link);
        return $footerPages;
    }

    public function list(int $rowsQuantity = null): array {

        $sql = "SELECT * FROM footer_pages ORDER BY id ASC";
        if ($rowsQuantity != null) {
            $sql .= " LIMIT ".$rowsQuantity;
        }
        $result = $this->con->query($sql);
        $pages = [];
        if ($this->con->error) {
            throw new \Exception($this->con->error);
        }

        while ($page = $result->fetch_object()) {
            $pages[] = new \App\Models\FooterPages\Entities\FooterPages((int) $page->id, $page->page, $page->link);
        }
        return $pages;
    }

    public function update(int $id, string $page, string $link): \App\Models\FooterPages\Entities\FooterPages {

        $id = addslashes($id);
        $page = addslashes($page);
        $link = addslashes($link);

        $sql = "UPDATE footer_pages SET page = '{$page}', link = '{$link}' WHERE id = " .$id;
        $this->con->query($sql);
        if ($this->con->error) {
            throw new \Exception($this->con->error);
        }
        
        return $this->get($id);
    }

    public function delete(int $id): \App\Models\FooterPages\Entities\FooterPages {
        
        $id = addslashes($id);
        $page = $this->get($id);
        
        $sql = "DELETE FROM footer_pages WHERE id = ".$id;
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $page;
    }

}
