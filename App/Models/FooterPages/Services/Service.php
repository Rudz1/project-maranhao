<?php

namespace App\Models\FooterPages\Services;

/**
 * Description of Service
 *
 * @author andre
 */
class Service implements IService {

    private $repository;

    public function __construct(\App\Models\FooterPages\Repositories\IRepository $repository) {
        $this->repository = $repository;
    }

    public function create(string $page, string $link): \App\Models\FooterPages\Entities\FooterPages {

        if (!$page) {
            throw new \Exception('Page name is required');
        }

        if (!$link) {
            throw new \Exception('Link is required');
        }

        return $this->repository->create($page, $link);
    }

    public function get($id): \App\Models\FooterPages\Entities\FooterPages {
        return $this->get($id);
    }

    public function initialize(): bool {
        $pages = $this->repository->list(1);
        if (!$pages) {
            $this->repository->create('', '');
        }
        return true;
    }

    public function list(): array {
        $this->initialize();
        $pages = $this->list();
        return $pages;
    }

    public function update(int $id, string $page, string $link): \App\Models\FooterPages\Entities\FooterPages {
        
        if (!$id) {
            throw new \Exception('id not found');
        }
        
        if (!$page) {
            throw new \Exception('Page name is required');
        }

        if (!$link) {
            throw new \Exception('Link is required');
        }
        
        return $this->update($id, $page, $link);
    }

}
