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
        return $this->repository->get($id);
    }

    public function initialize(): bool {

        if (!$this->repository->list(1)) {
            $this->repository->create('', '');
        }
        return true;
    }

    public function list(): array {
        $this->initialize();
        return $this->repository->list();
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
        
        return $this->repository->update($id, $page, $link);
    }

    public function delete($id): \App\Models\FooterPages\Entities\FooterPages {
        return $this->repository->delete($id);
    }

}
