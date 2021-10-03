<?php

namespace App\Models\Users\Services;

/**
 * Description of Service
 *
 * @author andre
 */
class Service implements IService {
    
    private $repository;
    
    public function __construct(\App\Models\Users\Repositories\IRepository $repository) {
        $this->repository = $repository;
    }

    public function auth(string $username, string $password): \App\Models\Users\Entities\Users {
        
        if(!$username){
            throw new \Exception('nome de usuario requerido');
        }
        
        if(!$password){
            throw new \Exception('insira a senha');
        }
        
        $password = sha1($password);
        
        return $this->repository->getUserByUsernamePassword($username, $password);
       
    }

    public function get(int $id): \App\Models\Users\Entities\Users {
        return $this->repository->get($id) ;
    }

    public function edit(int $id, string $username,string $password, string $passwordConfirm): \App\Models\Users\Entities\Users {
        if(!$username){
            throw new \Exception('nome de usuario requerido');
        }
        if(!$password){
            throw new \Exception('senha e requerida');
        }
        if($password != $passwordConfirm){
            throw new \Exception('senhas não coincidem');
        }
        
        return $this->repository->edit($id, $username, $password);
        
    }

}
