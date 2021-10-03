<?php

namespace Framework\Middleware;

/**
 *
 * @author andre
 */
interface IMidlleware {
    public function handle(\Framework\Request\Request $request, \Closure $next);
}
