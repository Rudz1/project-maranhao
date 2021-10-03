<?php

namespace App\Models\Users\Services;

/**
 * Description of IService
 *
 * @author andre
 */
interface IService {
    
    /**
     * 
     * @param string $username
     * @param string $password
     * @return \App\Models\Users\Entities\Users
     */
    public function auth(string $username, string $password): \App\Models\Users\Entities\Users;
    
    /**
     * 
     * @param int $id
     * @param string $username
     * @param string $email
     * @param string $password
     * @param string $passwordConfirm
     * @return bool
     */
    public function edit(int $id, string $username, string $password, string $passwordConfirm): \App\Models\Users\Entities\Users;
    
    /**
     * 
     * @param int $id
     * @return \App\Models\Users\Entities\Users
     */
    public function get(int $id): \App\Models\Users\Entities\Users ;
}
