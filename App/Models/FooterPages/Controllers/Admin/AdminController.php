<?php

namespace App\Models\FooterPages\Controllers\Admin;

/**
 * Description of AdminControllers
 *
 * @author andre
 */
class AdminController extends \Framework\Controller\Abstracts\BaseControler {
    
    public function list(){
        
        try{
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
    
}
