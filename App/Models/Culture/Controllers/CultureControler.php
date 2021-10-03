<?php

namespace App\Models\Culture\Controllers;

/**
 * Description of CultureControler
 *
 * @author andre
 */
class CultureControler extends \Framework\Controller\Abstracts\BaseControler {
    public function culture() {
        
        $contentRepository = new \App\Models\CultureContent\Repositories\Repository(\Framework\DB\Connection::getConnection());
        $contents = $contentService = new \App\Models\CultureContent\Services\Service($contentRepository);
        $contents = $contentService->list();
        
        $bannerRepository = new \App\Models\CultureBanner\Repositories\Repository(\Framework\DB\Connection::getConnection());
        $banners = $bannerService = new \App\Models\CultureBanner\Services\Service($bannerRepository);
        $banners = $bannerService->list();
        
        $data['contents'] = $contents;
        $data['banners'] = $banners;
        $data['page'] = 'Culture/Views/cultureView';
        $this->view('Public/Views/indexView', $data);
    }
}
