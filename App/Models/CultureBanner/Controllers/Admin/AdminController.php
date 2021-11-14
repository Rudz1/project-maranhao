<?php

namespace App\Models\CultureBanner\Controllers\Admin;

/**
 * Description of AdminController
 *
 * @author andre
 */
class AdminController extends \Framework\Controller\Abstracts\BaseControler {

    public function list() {

        try {

            $repository = new \App\Models\CultureBanner\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\CultureBanner\Services\Service($repository);
            $banners = $service->list();

            $data['banners'] = $banners;
            $data['page'] = 'CultureBanner/Views/Admin/tableView';
            $this->view('Admin/Views/indexView', $data);
        } catch (\Exception $e) {
            echo 'Error on list resource: ', $e->getMessage();
        }
    }

    public function editForm() {

        $id = $_GET['id'];

        try {
            $repository = new \App\Models\CultureBanner\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $service = new \App\Models\CultureBanner\Services\Service($repository);
            $banners = $service->get($id);

            $data['banners'] = $banners;
            $data['page'] = 'CultureBanner/Views/Admin/editFormView';
            $this->view('Admin/Views/indexView', $data);
        } catch (\Exception $e) {
            echo 'Error on edit resource: ', $e->getMessage();
        }
    }

    public function edit() {

        $id = $_GET['id'];
        $bannerImage = $_FILES['banner_image'];

        try {

            $repository = new \App\Models\CultureBanner\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $uploadService = new \App\Models\Upload\Services\Service();
            $service = new \App\Models\CultureBanner\Services\Service($repository);
            $banners = $service->get($id);
            $service->edit($uploadService, $id, $bannerImage['name'], $bannerImage['tmp_name']);
            
            header('Location: '. \App\Config\Config::url('admin/culture-banner-table'));
        } catch (\Exception $e) {
            $data['message'] = $e->getMessage();
            $data['banners'] = $banners;
            $data['page'] = 'CultureBanner/Views/Admin/editFormView';
            $this->view('Admin/Views/indexView', $data);
        }
    }

}
