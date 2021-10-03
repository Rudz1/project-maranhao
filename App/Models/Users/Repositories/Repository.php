<?php

namespace App\Models\Users\Repositories;

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

    public function list(): array{
        
        $sql = "SELECT * FROM users ORDER BY id DESC";
        
        $result = $this->con->query($sql);
        $users = [];
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
         while ($user = $result->fetch_object()){
            $users[] = new \App\Models\Users\Entities\Users((int)$user->id, $user->username, $user->email, $user->password);
        }
        
        return $users;
        
        
    }

    public function getUserByUsernamePassword(string $username, string $hashPassword): \App\Models\Users\Entities\Users {
        
        $sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$hashPassword}' ";
        
        $result = $this->con->query($sql);
        
        if($this->con->error){
            throw new \Exception($this->con->error);
        }    
        $user = $result->fetch_object();
                
        if($user == null){
            throw new \Exception('user not found');
        }
        
        $userLogged = new \App\Models\Users\Entities\Users((int)$user->id, $user->username, $user->email, $user->password);
        
        return $userLogged;
        
        
        
    }

    public function edit(int $id, string $username, string $password): \App\Models\Users\Entities\Users{
        
        $id = addslashes($id);
        $username = addslashes($username);
        $password = addslashes($password);
        
        $sql = "UPDATE users SET username = '{$username}', password = sha1('{$password}') WHERE id = ".$id;
        
        $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        
        return $this->get($id);
        
    }

    public function get(int $id): \App\Models\Users\Entities\Users {
        
        $id = addslashes($id);
        
        $sql = "SELECT * FROM users WHERE id = ".$id;
        $result = $this->con->query($sql);
        if($this->con->error){
            throw new \Exception($this->con->error);
        }
        $user = $result->fetch_object();
        if($user == null){
            throw new \Exception('user is null');
        }
        
        $userActive = new \App\Models\Users\Entities\Users((int)$user->id, $user->username, $user->email, $user->password);
        
        return $userActive;
    }

}
