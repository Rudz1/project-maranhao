<?php

namespace App\Models\Users\Controllers\Admin;

/**
 * Description of AdminController
 *
 * @author andre
 */
class AdminController extends \Framework\Controller\Abstracts\BaseControler {
    
    public function editForm() {
             
            $data['page'] = 'Users/Views/Admin/editForm';
            $this->view('Admin/Views/indexView', $data);
    
    }
    
    public function edit() {
        
        $id = $_GET['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
        
        try {
            
            $repository = new \App\Models\Users\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\Users\Services\Service($repository);
            $service->edit($id, $username, $password, $confirm);
            
            header('Location: '.\App\Config\Config::url('/admin'));
        } catch (\Exception $e) {
             echo 'error on edit user'. $e->getMessage();
        }
        
    }
    
}
