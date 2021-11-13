<?php

namespace App\Models\FooterContact\Controllers\Admin;

/**
 * Description of Controller
 *
 * @author andre
 */
class AdminController extends \Framework\Controller\Abstracts\BaseControler {
    
    static public function contact() {
           
          try {

            $repository = new \App\Models\FooterContact\Repository\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\FooterContact\Services\Service($repository);
            $contacts = $service->list();
            
            return $contacts;
        } catch (\Exception $e) {
            echo 'Error on list Contact ', $e->getMessage();
        }
        
    }

    public function list() {

        try {

            $repository = new \App\Models\FooterContact\Repository\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\FooterContact\Services\Service($repository);
            $contacts = $service->list();

            $data['contacts'] = $contacts;
            $data['page'] = 'FooterContact/Views/Admin/tableView';
            $this->view('Admin/Views/indexView', $data);
        } catch (\Exception $e) {
            echo 'Error on list Contact ', $e->getMessage();
        }
    }

    public function editForm() {

        $id = $_GET['id'];

        try {

            $repository = new \App\Models\FooterContact\Repository\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\FooterContact\Services\Service($repository);
            $contact = $service->get($id);

            $data['contact'] = $contact;
            $data['page'] = 'FooterContact/Views/Admin/editFormView';
            $this->view('Admin/Views/indexView', $data);
        } catch (\Exception $e) {
            echo 'Error on edit Contact ', $e->getMessage();
        }
    }

    public function edit() {

        $id = $_GET['id'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];

        try {

            $repository = new \App\Models\FooterContact\Repository\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\FooterContact\Services\Service($repository);
            $service->edit($id, $address, $email, $telephone);

            header('Location: ' . \App\Config\Config::url('/admin/footer-contact-table'));
        } catch (\Exception $e) {
            echo 'Error on edit Contact', $e->getMessage();
        }
    }

}
