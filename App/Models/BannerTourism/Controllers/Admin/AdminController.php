<?php

namespace App\Models\BannerTourism\Controllers\Admin;

/**
 * Description of TouristBannerControler
 *
 * @author andre
 */
class AdminController extends \Framework\Controller\Abstracts\BaseControler {
    
    
    public function list(){
        try {
            
        $repository = new \App\Models\BannerTourism\Repositories\Repository(\Framework\DB\Connection::getConnection());
        $service = new \App\Models\BannerTourism\Services\Service($repository);
        $banner = $service->list();
        
        $data['banners'] = $banner;
        $data['page'] = 'BannerTourism/Views/Admin/tableView';
        $this->view('Admin/Views/indexView', $data);
        
        } catch (\Exception $e) {
             echo 'Error on list resource: ', $e->getMessage();
        }
        
    }
    
    public function addForm(){
        $data['page'] = 'BannerTourism/Views/Admin/addFormView';
        $this->view('Admin/Views/indexView', $data);
    }
    
    public function addSave(){
        
        $banner = $_FILES['image'];
        $placeName = $_POST['place_name'];
        
        try {
            
             $repository = new \App\Models\BannerTourism\Repositories\Repository(\Framework\DB\Connection::getConnection());
             $uploadService = new \App\Models\Upload\Services\Service();
             $service = new \App\Models\BannerTourism\Services\Service($repository);
             $service->add($uploadService, $banner['name'], $banner['tmp_name'], $placeName);
        
             header('Location: '.\App\Config\Config::url('/admin/banner-tourism-table'));
        } catch (Exception $e) {
            echo 'Error on add resource: ', $e->getMessage();
        }
        
    }
    
    public function editForm() {
            
        $id = $_GET['id'];
        
        try{
            $repository = new \App\Models\BannerTourism\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\BannerTourism\Services\Service($repository);
            $banner = $service->get($id);
            
            $data['banners'] = $banner;
            $data['page'] = 'BannerTourism/Views/Admin/editFormView';
            $this->view('/Admin/Views/indexView', $data);
            
        } catch (\Exception $e) {
             echo 'Error on get resource: ', $e->getMessage();
        }
    }
    
    public function editSave() {
        
        $id = $_GET['id'];
        $banner = $_FILES['image'];
        $placeName = $_POST['place_name'];
        
        try {
            
             $repository = new \App\Models\BannerTourism\Repositories\Repository(\Framework\DB\Connection::getConnection());
             $uploadService = new \App\Models\Upload\Services\Service();
             $service = new \App\Models\BannerTourism\Services\Service($repository);
             $service->edit($uploadService, $id, $banner['name'], $banner['tmp_name'], $placeName);
        
             header('Location: '.\App\Config\Config::url('/admin/banner-tourism-table'));
        } catch (Exception $e) {
            echo 'Error on edit resource: ', $e->getMessage();
        }
    }
    
    public function delete() {
              
        $id = $_GET['id'];
        
        try {
            
             $repository = new \App\Models\BannerTourism\Repositories\Repository(\Framework\DB\Connection::getConnection());
             $service = new \App\Models\BannerTourism\Services\Service($repository);
             $service->delete($id);
        
             header('Location: '.\App\Config\Config::url('/admin/banner-tourism-table'));
        } catch (Exception $e) {
            echo 'Error on edit resource: ', $e->getMessage();
        }
        
    }
    
}
