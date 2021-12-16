<?php

namespace App\Models\FooterPages\Controllers\Admin;

/**
 * Description of AdminControllers
 *
 * @author andre
 */
class AdminController extends \Framework\Controller\Abstracts\BaseControler {

    public static function pages(){
        
        try {
            $repository = new \App\Models\FooterPages\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\FooterPages\Services\Service($repository);
            return $service->list();
            
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        
    }

    public function list() {

        try {
            $repository = new \App\Models\FooterPages\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\FooterPages\Services\Service($repository);
            $pages = $service->list();

            $data['pages'] = $pages;
            $data['page'] = 'FooterPages/Views/Admin/tableView';
            $this->view('Admin/Views/indexView', $data);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function addForm() {
        $data['page'] = 'FooterPages/Views/Admin/addFormView';
        $this->view('Admin/Views/indexView', $data);
    }

    public function add() {

        $page = $_POST['page'];
        $link = $_POST['link'];

        try {

            $repository = new \App\Models\FooterPages\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\FooterPages\Services\Service($repository);
            $service->create($page, $link);

            header('Location: ' . \App\Config\Config::url('/admin/footer-pages-table'));
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function editForm() {

        $id = $_GET['id'];

        try {
            $repository = new \App\Models\FooterPages\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\FooterPages\Services\Service($repository);
            $pages = $service->get($id);

            $data['pages'] = $pages;
            $data['page'] = 'FooterPages/Views/Admin/editFormView';
            $this->view('Admin/Views/indexView', $data);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    
    public function edit(){
        $id = $_GET['id'];
        $page = $_POST['page'];
        $link = $_POST['link'];

        try {

            $repository = new \App\Models\FooterPages\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\FooterPages\Services\Service($repository);
            $service->update($id, $page, $link);

            header('Location: ' . \App\Config\Config::url('/admin/footer-pages-table'));
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    
    }
    
    public function delete(){
        $id = $_GET['id'];
        
        try{
            $repository = new \App\Models\FooterPages\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\FooterPages\Services\Service($repository);
            $service->delete($id);
            
            header('Location: ' . \App\Config\Config::url('/admin/footer-pages-table'));
        } catch (Exception $ex) {
           echo $e->getMessage();
        }
    }

}
