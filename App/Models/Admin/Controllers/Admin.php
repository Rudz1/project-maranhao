<?php

namespace App\Models\Admin\Controllers;

/**
 * Description of Admin
 *
 * @author andre
 */
class Admin extends \Framework\Controller\Abstracts\BaseControler {
    
    public function admin() {
        $data['page'] = 'Admin/Views/adminView';
        $this->view('Admin/Views/indexView', $data);
    }
    
    public function resourceshome(){
        $data['page'] = 'Admin/Views/homeResourcesView';
        $this->view('Admin/Views/indexView', $data);
    }
    
    public function resourcesTourist() {
        $data['page'] = 'Admin/Views/touristResourcesView';
        $this->view('Admin/Views/indexView', $data);
    }
    
    public function resourcesCulture() {
        $data['page'] = 'Admin/Views/cultureResourcesView';
        $this->view('Admin/Views/indexView', $data);
    }
    
}
