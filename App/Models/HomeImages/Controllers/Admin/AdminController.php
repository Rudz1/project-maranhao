<?php

namespace App\Models\HomeImages\Controllers\Admin;

/**
 * Description of AdminController
 *
 * @author andre
 */
class AdminController extends \Framework\Controller\Abstracts\BaseControler {
    
    public function list(){
        try {
            
        $repository = new \App\Models\HomeImages\Repositories\Repository(\Framework\DB\Connection::getConnection());
        $service = new \App\Models\HomeImages\Services\Service($repository);
        $images = $service->list();
        
        $data['images'] = $images;
        $data['page'] = 'HomeImages/Views/Admin/tableView';
        $this->view('Admin/Views/indexView', $data);
        
        } catch (\Exception $e) {
             echo 'Error on list resource: ', $e->getMessage();
        }
        
    }
    
    public function addForm(){
        $data['page'] = 'HomeImages/Views/Admin/addFormView';
        $this->view('Admin/Views/indexView', $data);
    }
    
    public function add(){
        
        $image = $_FILES['image'];
  
        try {
            
             $repository = new \App\Models\HomeImages\Repositories\Repository(\Framework\DB\Connection::getConnection());
             $uploadService = new \App\Models\Upload\Services\Service();
             $service = new \App\Models\HomeImages\Services\Service($repository);
             $service->add($uploadService, $image['name'], $image['tmp_name']);
        
             header('Location: '.\App\Config\Config::url('/admin/home-images-table'));
        } catch (Exception $e) {
            echo 'Error on add resource: ', $e->getMessage();
        }
        
    }
    
    public function editForm() {
            
        $id = $_GET['id'];
        
        try{
            $repository = new \App\Models\HomeImages\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\HomeImages\Services\Service($repository);
            $images = $service->get($id);
            
            $data['images'] = $images;
            $data['page'] = 'HomeImages/Views/Admin/editFormView';
            $this->view('/Admin/Views/indexView', $data);
            
        } catch (\Exception $e) {
             echo 'Error on get resource: ', $e->getMessage();
        }
    }
    
    public function edit() {
        
        $id = $_GET['id'];
        $images = $_FILES['image'];
        
        try {   
            
             $repository = new \App\Models\HomeImages\Repositories\Repository(\Framework\DB\Connection::getConnection());
             $uploadService = new \App\Models\Upload\Services\Service();
             $service = new \App\Models\HomeImages\Services\Service($repository);
           
             $service->edit($uploadService, $id, $images['name'], $images['tmp_name']);
        
             header('Location: '.\App\Config\Config::url('/admin/home-images-table'));
        } catch (Exception $e) {
            echo 'Error on edit resource: ', $e->getMessage();
        }
    }
    
    public function delete() {
              
        $id = $_GET['id'];
        
        try {
            
            $repository = new \App\Models\HomeImages\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\HomeImages\Services\Service($repository);
            $service->delete($id);
        
             header('Location: '.\App\Config\Config::url('/admin/home-images-table'));
        } catch (Exception $e) {
            echo 'Error on edit resource: ', $e->getMessage();
        }
        
    }
    
    
}
