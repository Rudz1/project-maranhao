<?php

namespace App\Models\HomeLogo\Controllers\Admin;

/**
 * Description of AdminController
 *
 * @author andre
 */
class AdminController extends \Framework\Controller\Abstracts\BaseControler {

    static public function logo() {

        $repository = new \App\Models\HomeLogo\Repositories\Repository(\Framework\DB\Connection::getConnection());
        $service = new \App\Models\HomeLogo\Services\Service($repository);
        $logo = $service->list();

        return $logo[0]->getUri();
    }

    public function list() {

        try {

            $repository = new \App\Models\HomeLogo\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\HomeLogo\Services\Service($repository);
            $logos = $service->list();

            $data['logos'] = $logos;
            $data['page'] = 'HomeLogo/Views/Admin/tableView';
            $this->view('Admin/Views/indexView', $data);
        } catch (\Exception $e) {
            echo 'Error on list resource: ', $e->getMessage();
        }
    }

    public function editForm() {

        $id = $_GET['id'];

        try {
            $repository = new \App\Models\HomeLogo\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\HomeLogo\Services\Service($repository);
            $logos = $service->get($id);

            $data['logos'] = $logos;
            $data['page'] = 'HomeLogo/Views/Admin/editFormView';
            $this->view('Admin/Views/indexView', $data);
        } catch (\Exception $e) {
            echo 'Error on get resource: ', $e->getMessage();
        }
    }

    public function edit() {

        $id = $_GET['id'];
        $logoImage = $_FILES['logo_image'];

        try {

            $repository = new \App\Models\HomeLogo\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $uploadService = new \App\Models\Upload\Services\Service();
            $service = new \App\Models\HomeLogo\Services\Service($repository);
            $logos = $service->get($id);
            $service->edit($uploadService, $id, $logoImage['name'], $logoImage['tmp_name']);

            header('Location: ' . \App\Config\Config::url('admin/home-logo-table'));
        } catch (\Exception $e) {
            $data['message'] = $e->getMessage();
            $data['logos'] = $logos;
            $data['page'] = 'HomeLogo/Views/Admin/editFormView';
            $this->view('Admin/Views/indexView', $data);
        }
    }

}
