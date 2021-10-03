<?php

namespace App\Config;

class Router{
    public static function configRouters(\Framework\Router\Routing $router) {
        
        //base Url
        $router->setBaseUrl(Config::$BASE_URL);
        
        //404
        $router->setPage404(function(){echo "Page404";});
        
        //routers
        $router->get('/', \App\Models\Home\Controllers\HomeController::class, "home");
        $router->get('/contact', \App\Models\Contact\Controllers\ContactControler::class, "contact");
        $router->post('/send', \App\Models\Contact\Controllers\ContactControler::class, "send");
        $router->get('/tourist-hotspots', \App\Models\Tourism\Controllers\TourismControler::class, 'tourist');
        $router->get('/culture', \App\Models\Culture\Controllers\CultureControler::class, 'culture');
        $router->get('/auth/login', \App\Models\Login\Controllers\Controller::class, 'loginForm');
        $router->get('/auth/logout', \App\Models\Login\Controllers\Controller::class, 'logout');
        $router->post('/auth/login-verify', \App\Models\Login\Controllers\Controller::class, 'auth');
        
        //routers - admin
        $router->get('/admin', \App\Models\Admin\Controllers\Admin::class, 'admin');
        $router->get('/admin/resources-home', \App\Models\Admin\Controllers\Admin::class, 'resourcesHome');
        $router->get('/admin/resources-tourist-hotspots', \App\Models\Admin\Controllers\Admin::class, 'resourcesTourist');
        $router->get('/admin/resources-culture', \App\Models\Admin\Controllers\Admin::class, 'resourcesCulture');
        $router->get('/admin/admin-user-edit-form', \App\Models\Users\Controllers\Admin\AdminController::class, 'editForm');
        $router->post('/admin/admin-user-edit-save', \App\Models\Users\Controllers\Admin\AdminController::class, 'edit');
        
        //router - admin - home - logo
        $router->get('/admin/home-logo-table', \App\Models\HomeLogo\Controllers\Admin\AdminController::class, 'list');
        $router->get('/admin/home-logo-edit-form', \App\Models\HomeLogo\Controllers\Admin\AdminController::class, 'editForm');
        $router->post('/admin/home-logo-edit-save', \App\Models\HomeLogo\Controllers\Admin\AdminController::class, 'edit');
        
        
        //router - admin - home - banner
        $router->get('/admin/home-banner-table', \App\Models\HomeBanner\Controllers\Admin\AdminControllers::class, 'list');
        $router->get('/admin/home-banner-edit-form', \App\Models\HomeBanner\Controllers\Admin\AdminControllers::class, 'editForm');
        $router->post('/admin/home-banner-edit-save', \App\Models\HomeBanner\Controllers\Admin\AdminControllers::class, 'edit');
        $router->get('/admin/home-banner-add-form', \App\Models\HomeBanner\Controllers\Admin\AdminControllers::class, 'addForm');
        $router->post('/admin/home-banner-add-save', \App\Models\HomeBanner\Controllers\Admin\AdminControllers::class, 'add');
        $router->get('/admin/home-banner-delete', \App\Models\HomeBanner\Controllers\Admin\AdminControllers::class, 'delete');
        
        //router - admin - home - images
        $router->get('/admin/home-images-table', \App\Models\HomeImages\Controllers\Admin\AdminController::class, 'list');
        $router->get('/admin/home-images-edit-form', \App\Models\HomeImages\Controllers\Admin\AdminController::class, 'editForm');
        $router->post('/admin/home-images-edit-save', \App\Models\HomeImages\Controllers\Admin\AdminController::class, 'edit');
        $router->get('/admin/home-images-add-form', \App\Models\HomeImages\Controllers\Admin\AdminController::class, 'addForm');
        $router->post('/admin/home-images-add-save', \App\Models\HomeImages\Controllers\Admin\AdminController::class, 'add');
        $router->get('/admin/home-images-delete', \App\Models\HomeImages\Controllers\Admin\AdminController::class, 'delete');
        
        //router - admin - tourism - banner
        $router->get('/admin/banner-tourism-table', \App\Models\BannerTourism\Controllers\Admin\AdminController::class, 'list');
        $router->get('/admin/banner-tourism-add', \App\Models\BannerTourism\Controllers\Admin\AdminController::class, 'addForm');
        $router->post('/admin/banner-tourism-add-save', \App\Models\BannerTourism\Controllers\Admin\AdminController::class, 'addSave');
        $router->get('/admin/banner-tourism-edit', \App\Models\BannerTourism\Controllers\Admin\AdminController::class, 'editForm');
        $router->post('/admin/banner-tourism-edit-save', \App\Models\BannerTourism\Controllers\Admin\AdminController::class, 'editSave');
        $router->get('/admin/banner-tourism-delete', \App\Models\BannerTourism\Controllers\Admin\AdminController::class, 'delete');
        
        //router - admin - tourism - content
        $router->get('/admin/tourism-content-table', \App\Models\TourismContent\Controllers\Admin\AdminController::class, 'list');
        $router->get('/admin/tourism-content-add', \App\Models\TourismContent\Controllers\Admin\AdminController::class, 'addForm');
        $router->post('/admin/tourism-content-add-save', \App\Models\TourismContent\Controllers\Admin\AdminController::class, 'add');
        $router->get('/admin/tourism-content-edit', \App\Models\TourismContent\Controllers\Admin\AdminController::class, 'editForm');
        $router->post('/admin/tourism-content-edit-save', \App\Models\TourismContent\Controllers\Admin\AdminController::class, 'edit');
        $router->get('/admin/tourism-content-delete', \App\Models\TourismContent\Controllers\Admin\AdminController::class, 'delete');
        
        //router - admin - culture - banner
        $router->get('/admin/culture-banner-table', \App\Models\CultureBanner\Controllers\Admin\AdminController::class, 'list');
        $router->get('/admin/culture-banner-edit-form', \App\Models\CultureBanner\Controllers\Admin\AdminController::class, 'editForm');
        $router->post('/admin/culture-banner-edit-save', \App\Models\CultureBanner\Controllers\Admin\AdminController::class, 'edit');
   
        //router - admin - culture - content
        $router->get('/admin/culture-content-table', \App\Models\CultureContent\Controllers\Admin\AdminController::class, 'list');
        $router->get('/admin/culture-content-add', \App\Models\CultureContent\Controllers\Admin\AdminController::class, 'addForm');
        $router->post('/admin/culture-content-add-save', \App\Models\CultureContent\Controllers\Admin\AdminController::class, 'add');
        $router->get('/admin/culture-content-edit', \App\Models\CultureContent\Controllers\Admin\AdminController::class, 'editForm');
        $router->post('/admin/culture-content-edit-save', \App\Models\CultureContent\Controllers\Admin\AdminController::class, 'edit');
        $router->get('/admin/culture-content-delete', \App\Models\CultureContent\Controllers\Admin\AdminController::class, 'delete');
       
    }

}