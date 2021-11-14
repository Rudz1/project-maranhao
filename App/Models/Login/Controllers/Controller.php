<?php

namespace App\Models\Login\Controllers;

/**
 * Description of Controller
 *
 * @author andre
 */
class Controller extends \Framework\Controller\Abstracts\BaseControler {
    
    public function loginForm() {    
        
        $this->view('Login/Views/loginForm');
        
    }
    
    public function logout() {
        
        $_SESSION['ADMIN_LOGGED'] = '';
        
        header("Location: ".\App\Config\Config::url('/auth/login'));
        
    }


    public function auth() {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        try {
            
            $repository = new \App\Models\Users\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\Users\Services\Service($repository);
            $user = $service->auth($username, $password);
            $_SESSION['ADMIN_LOGGED'] = $user->getUsername();
                   
            header("Location: ".\App\Config\Config::url('/admin'));        
        } catch (\Exception $e) {
             $data['message'] = $e->getMessage();
             $this->view('Login/Views/loginForm', $data);
        }
        
    }
    
}
