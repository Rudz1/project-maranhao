<?php

namespace App\Models\CultureContent\Controllers\Admin;

/**
 * Description of AdminController
 *
 * @author andre
 */
class AdminController extends \Framework\Controller\Abstracts\BaseControler {

    public function list() {

        try {

            $repository = new \App\Models\CultureContent\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\CultureContent\Services\Service($repository);
            $contents = $service->list();

            $data['contents'] = $contents;
            $data['page'] = 'CultureContent/Views/Admin/tableView';
            $this->view('Admin/Views/indexView', $data);
        } catch (\Exception $e) {
            echo 'error on list resources' . $e->getMessage();
        }
    }

    public function addForm() {
        $data['page'] = 'CultureContent/Views/Admin/addFormView';
        $this->view('Admin/Views/indexView', $data);
    }

    public function add() {

        $title = $_POST['title'];
        $image = $_FILES['image'];
        $text = $_POST['text'];

        try {

            $repository = new \App\Models\CultureContent\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $uploadService = new \App\Models\Upload\Services\Service();
            $service = new \App\Models\CultureContent\Services\Service($repository);
            $service->add($uploadService, $title, $image['name'], $image['tmp_name'], $text);

            header('Location: ' . \App\Config\Config::url('/admin/culture-content-table'));
        } catch (\Exception $e) {
            $data['message'] = $e->getMessage();
            $data['page'] = 'CultureContent/Views/Admin/addFormView';
            $this->view('Admin/Views/indexView', $data);
        }
    }

    public function editForm() {

        $id = $_GET['id'];

        try {

            $repository = new \App\Models\CultureContent\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $contents = $service = new \App\Models\CultureContent\Services\Service($repository);
            $contents = $service->get($id);

            $data['contents'] = $contents;
            $data['page'] = 'CultureContent/Views/Admin/editFormView';
            $this->view('Admin/Views/indexView', $data);
        } catch (\Exception $e) {
            echo 'error on add resources' . $e->getMessage();
        }
    }

    public function edit() {

        $id = $_GET['id'];
        $title = $_POST['title'];
        $image = $_FILES['image'];
        $text = $_POST['text'];

        try {

            $repository = new \App\Models\CultureContent\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $uploadService = new \App\Models\Upload\Services\Service();
            $service = new \App\Models\CultureContent\Services\Service($repository);
            $contents = $service->get($id);
            $service->edit($uploadService, $id, $title, $image['name'], $image['tmp_name'], $text);

            header('Location: ' . \App\Config\Config::url('/admin/culture-content-table'));
        } catch (\Exception $e) {
            $data['message'] = $e->getMessage();
            $data['contents'] = $contents;
            $data['page'] = 'CultureContent/Views/Admin/editFormView';
            $this->view('Admin/Views/indexView', $data);
        }
    }

    public function delete() {

        $id = $_GET['id'];

        try {

            $repository = new \App\Models\CultureContent\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\CultureContent\Services\Service($repository);
            $service->delete($id);

            header('Location: ' . \App\Config\Config::url('/admin/culture-content-table'));
        } catch (\Exception $e) {
            echo 'error on edit resources' . $e->getMessage();
        }
    }

}
