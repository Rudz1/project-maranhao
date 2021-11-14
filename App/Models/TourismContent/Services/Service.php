<?php

namespace App\Models\TourismContent\Services;

/**
 * Description of Service
 *
 * @author andre
 */
class Service implements IService {

    private $repository;

    public function __construct(\App\Models\TourismContent\Repositories\IRepository $repository) {
        $this->repository = $repository;
    }

    public function add(string $title, string $text, string $link): \App\Models\TourismContent\Entities\TourismContent {
        if (!$title) {
            throw new \Exception('title is required');
        }
        if (!$text) {
            throw new \Exception('text is required');
        }
        if (!$link) {
            throw new \Exception('link is required');
        }


        return $this->repository->add($title, $text, $link);
    }

    public function delete(int $id): \App\Models\TourismContent\Entities\TourismContent {
        return $this->repository->delete($id);
    }

    public function edit(int $id, string $title, string $text, string $link): \App\Models\TourismContent\Entities\TourismContent {
        if (!$title) {
            throw new \Exception('title is required');
        }
        if (!$text) {
            throw new \Exception('text is required');
        }
        if (!$link) {
            throw new \Exception('link is required');
        }

        return $this->repository->edit($id, $title, $text, $link);
    }

    public function get(int $id): \App\Models\TourismContent\Entities\TourismContent {
        return $this->repository->get($id);
    }

    public function initialize(): bool {
        $content = $this->repository->list(1);
        if (!$content) {
            $this->repository->add('', '', '');
        }

        return true;
    }

    public function list(): array {
        $this->initialize();

        $content = $this->repository->list();

        return $content;
    }

}
