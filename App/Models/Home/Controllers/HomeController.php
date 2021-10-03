<?php

namespace App\Models\Home\Controllers;

class HomeController extends \Framework\Controller\Abstracts\BaseControler{
     
    public function home(){
        
        try{
            
            $homeImagesRepository = new \App\Models\HomeImages\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $images = $homeBannerService = new \App\Models\HomeImages\Services\Service($homeImagesRepository);
            $images = $homeBannerService->list();
            
            $homeBannerRepository = new \App\Models\HomeBanner\Repositories\Repository(\Framework\DB\Connection::getConnection());
            $banners = $homeBannerService = new \App\Models\HomeBanner\Services\Service($homeBannerRepository);
            $banners = $homeBannerService->list();         
            
            $data['images'] = $images; 
            $data['banners'] = $banners;
            $data['page'] = 'Home/Views/homeView';          
            $this->view('Public/Views/indexView', $data);
            
        } catch (\Exception $e) {
             echo 'Error on list resource: ', $e->getMessage();
        }
    }
    
    
      
    
}