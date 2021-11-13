<?php

namespace App\Models\FooterContact\Repository;

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

    
    public function edit(int $id, string $address, string $email, string $telephone): \App\Models\FooterContact\Entities\FooterContact {
        
        $id = addslashes($id);
        $address = addslashes($address);
        $email = addslashes($email);
        $telephone = addslashes($telephone);
        
        $sql = "UPDATE footer_contact SET address = '{$address}', email = '{$email}', telephone = {$telephone} WHERE id = ".$id;
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $this->get($id);
    }

    public function get(int $id): \App\Models\FooterContact\Entities\FooterContact {
        
        $id = addslashes($id);
        
        $sql = "SELECT * FROM footer_contact WHERE id = ".$id;
        $result = $this->con->query($sql);
        
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        $contacts = $result->fetch_object();
        if($contacts == null){
            throw new \Exception('contact not found');
        }
        $contact = new \App\Models\FooterContact\Entities\FooterContact((int) $contacts->id, $contacts->address, $contacts->email, $contacts->telephone);
        return $contact;
    }

    public function initialize():  \App\Models\FooterContact\Entities\FooterContact {
        
        $sql = "INSERT INTO footer_contact(address, email, telephone) VALUES('', '', '0')";
        
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        return $this->get((int)$this->con->insert_id);
    }

    public function list(int $rowsQuantity = null): array {
        
        $sql = "SELECT * FROM footer_contact ORDER BY id DESC";
        if($rowsQuantity != null){
            $sql .= " LIMIT ".$rowsQuantity;
        }
        
        $result = $this->con->query($sql);
        $contacts = [];
        
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        while($contact = $result->fetch_object()){
            $contacts[] = new \App\Models\FooterContact\Entities\FooterContact((int) $contact->id, $contact->address, $contact->email, $contact->telephone);
        }
        
        return $contacts;
    }

}
