<?php

namespace App\Models\Users\Repositories;

/**
 * Description of IRepository
 *
 * @author andre
 */
interface IRepository {
    
    /**
     * 
     * @return \App\Models\Users\Entities\Users[]
     */
    public function getUserByUsernamePassword(string $username, string $hashPassword): \App\Models\Users\Entities\Users;
     
    /**
      * 
      * @return array
      */
    public function list(): array;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\Users\Entities\Users
     */
    public function get(int $id): \App\Models\Users\Entities\Users;
    
    /**
     * 
     * @param int $id
     * @param string $username
     * @param string $email
     * @param string $password
     * @return \App\Models\Users\Entities\Users
     */
    public function edit(int $id, string $username, string $password): \App\Models\Users\Entities\Users;
    
}
