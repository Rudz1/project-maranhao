<?php

namespace App\Models\TourismContent\Controllers\Admin;
/**
 * Description of AdminController
 *
 * @author andre
 */
class AdminController extends \Framework\Controller\Abstracts\BaseControler {
    
    public function list() {
        
        try {
            
            $repository = new \App\Models\TourismContent\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $contents = $service = new \App\Models\TourismContent\Services\Service($repository);
            $contents = $service->list();
            
            $data['contents'] = $contents;
            $data['page'] = 'TourismContent/Views/Admin/tableView';
            $this->view('Admin/Views/indexView', $data);
        
        } catch (\Exception $e) {
            echo 'error on list resources'. $e->getMessage();
        }
        
    }
    
    public function addForm() {
        $data['page'] = 'TourismContent/Views/Admin/addFormView';
        $this->view('Admin/Views/indexView', $data);  
    }
    
    public function  add() {
        
        $title = $_POST['title'];
        $text = $_POST['text'];
        $link = $_POST['link'];
        
        try {
            
            $repository = new \App\Models\TourismContent\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\TourismContent\Services\Service($repository);
            $service->add($title, $text, $link);
           
            header('Location: '.\App\Config\Config::url('/admin/tourism-content-table'));
        } catch (\Exception $e) {
            echo 'error on add resources'. $e->getMessage();
        }
        
    }
    
    public function  editForm() {
        
        $id = $_GET['id'];
        
        try {
            
            $repository = new \App\Models\TourismContent\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $contents = $service = new \App\Models\TourismContent\Services\Service($repository);
            $contents = $service->get($id);
            
            $data['contents'] = $contents;
            $data['page'] = 'TourismContent/Views/Admin/editFormView';
            $this->view('Admin/Views/indexView', $data);
            
        } catch (\Exception $e) {
            echo 'error on add resources'. $e->getMessage();
        }
        
    }
    
    public function edit(){
        
        $id = $_GET['id'];
        $title = $_POST['title'];
        $text = $_POST['text'];
        $link = $_POST['link'];
        
        try{
            
            $repository = new \App\Models\TourismContent\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\TourismContent\Services\Service($repository);
            $service->edit($id, $title, $text, $link);
            
            header('Location: '.\App\Config\Config::url('/admin/tourism-content-table'));
            
        } catch (\Exception $e) {
            echo 'error on edit resources'. $e->getMessage();
        }
        
    }
    
    
   public function delete() {
       
       $id = $_GET['id'];
       
       try {
           
           $repository = new \App\Models\TourismContent\Repositories\Repository(\Framework\DB\Connection::getConnection());
           $service = new \App\Models\TourismContent\Services\Service($repository);
           $service->delete($id);
           
           header('Location: '.\App\Config\Config::url('/admin/tourism-content-table'));
           
       } catch (\Exception $e) {
            echo 'error on edit resources'. $e->getMessage();
       }
       
   }
}
