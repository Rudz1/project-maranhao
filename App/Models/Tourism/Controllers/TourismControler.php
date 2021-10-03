<?php

namespace App\Models\Tourism\Controllers;

/**
 * Description of TouristHotspotsControler
 *
 * @author andre
 */
class TourismControler extends \Framework\Controller\Abstracts\BaseControler{
    function tourist(){
        
        $contentTourismRepository = new \App\Models\TourismContent\Repositories\Repository(\Framework\DB\Connection::getConnection());
        $contents = $contentTourismService = new \App\Models\TourismContent\Services\Service($contentTourismRepository);
        $contents = $contentTourismService->list();
        
        $bannerTourismRepository = new \App\Models\BannerTourism\Repositories\Repository(\Framework\DB\Connection::getConnection());
        $banners = $bannerTourismService = new \App\Models\BannerTourism\Services\Service($bannerTourismRepository);
        $banners = $bannerTourismService->list();
        
        $data['contents'] = $contents;
        $data['banners'] = $banners;
        $data['page'] = 'Tourism/Views/touristHotspotsView';
        $this->view('Public/Views/indexView', $data);
    }
}
