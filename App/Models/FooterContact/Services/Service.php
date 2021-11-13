<?php

namespace App\Models\FooterContact\Services;

/**
 * Description of Service
 *
 * @author andre
 */
class Service implements IService {

    private $repository;

    public function __construct(\App\Models\FooterContact\Repository\IRepository $repository) {
        $this->repository = $repository;
    }

    public function edit(int $id, string $address, string $email, string $telephone): \App\Models\FooterContact\Entities\FooterContact {
        
        if(!$address){
            throw new \Exception('address is required');
        }
        if(!$email){
            throw new \Exception('email is required');
        }
        if(!$telephone){
            throw new \Exception('telephone is required');
        }
        
        return $this->repository->edit($id, $address, $email, $telephone);
        
    }

    public function get(int $id): \App\Models\FooterContact\Entities\FooterContact {      
        return $this->repository->get($id); 
    }

    public function initialize(): bool {
        
        $contact = $this->repository->list(1);
        if(!$contact){
            return $this->repository->initialize();
        }
        return true;
    }

    public function list(): array {
        $this->initialize();
        
        return $this->repository->list();

    }

}
