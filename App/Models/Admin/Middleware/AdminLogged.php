<?php

namespace App\Models\Admin\Middleware;

/**
 * Description of AdminLogged
 *
 * @author andre
 */
class AdminLogged implements \Framework\Middleware\IMidlleware{
    //put your code here
    public function handle(\Framework\Request\Request $request, \Closure $next) {
        $logged = isset($_SESSION["ADMIN_LOGGED"]) && $_SESSION["ADMIN_LOGGED"];

        $isAdmin = substr($request->getUri(), 0,6) == "/admin";
        
        if ($isAdmin && !$logged){
            header("Location: ".\App\Config\Config::url("auth/login"));
            exit;
        }
        
        $next($request);
    }

}
