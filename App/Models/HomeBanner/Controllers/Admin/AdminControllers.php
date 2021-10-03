<?php

namespace App\Models\HomeBanner\Controllers\Admin;

/**
 * Description of AdminControllers
 *
 * @author andre
 */

class AdminControllers extends \Framework\Controller\Abstracts\BaseControler {
    
     public function list() {
        
        try{
            
            $repository = new \App\Models\HomeBanner\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\HomeBanner\Services\Service($repository);
            $banners = $service->list();
                    
            $data['banners'] = $banners;
            $data['page'] = 'HomeBanner/Views/Admin/tableView';
            $this->view('Admin/Views/indexView', $data);
        } catch (\Exception $e) {
             echo 'Error on list resource: ', $e->getMessage();
        }
        
        
    }
    
    public function editForm(){
        
        $id = $_GET['id'];
        
        try{
            $repository = new \App\Models\HomeBanner\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\HomeBanner\Services\Service($repository);
            $banners = $service->get($id);
            
            $data['banners'] = $banners;
            $data['page'] = 'HomeBanner/Views/Admin/editFormView';
            $this->view('Admin/Views/indexView', $data);
            
        } catch (\Exception $e) {
             echo 'Error on get resource: ', $e->getMessage();
        }
    }


    public function edit() {
        
        $id = $_GET['id'];
        $bannerImage = $_FILES['banner_image'];
        
        try {
            
            $repository = new \App\Models\HomeBanner\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $uploadService = new \App\Models\Upload\Services\Service();
            $service = new \App\Models\HomeBanner\Services\Service($repository);
            $service->edit($uploadService,$id, $bannerImage['name'], $bannerImage['tmp_name']);
            
            header('Location: '.\App\Config\Config::url('admin/home-banner-table'));
        } catch (\Exception $e) {
             echo 'Error on edit resource: ', $e->getMessage();
        }
    }
    
    public function addForm() {       
         $data['page'] = 'HomeBanner/Views/Admin/addFormView';
         $this->view('Admin/Views/indexView', $data);     
    }
    
    public function add() {
        
        $bannerImage = $_FILES['banner_image'];
        
        try {
            
            $repository = new \App\Models\HomeBanner\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $uploadService = new \App\Models\Upload\Services\Service();
            $service = new \App\Models\HomeBanner\Services\Service($repository);
            $service->add($uploadService, $bannerImage['name'], $bannerImage['tmp_name']);
        
            header('Location: '.\App\Config\Config::url('admin/home-banner-table'));
        } catch (\Exception $e) {
            echo 'Error on add resource: ', $e->getMessage();
        }  
        
    }
    
    public function delete() {
        
        $id = $_GET['id'];
        
        try {
        
            $repository = new \App\Models\HomeBanner\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\HomeBanner\Services\Service($repository);
            $service->delete($id);
         
            header('Location: '.\App\Config\Config::url('admin/home-banner-table'));
        } catch (\Exception $e) {
            echo 'Error on delete resource: ', $e->getMessage();
        }
        
    }
    
}
