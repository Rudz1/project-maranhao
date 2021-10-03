<?php


namespace App\Config;

/**
 * Description of Middleware
 *
 * @author andre
 */
class Middleware {
      public static function config(\Framework\Middleware\Middleware $middleware) {
          $middleware->register(new \App\Models\Admin\Middleware\AdminLogged());
      }
}
