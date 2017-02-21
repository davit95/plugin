<?php

require APP_PATH.DS.'services'.DS.'RouterService.php';

class Bootstrap {
	
	/**
     * Run Router
     *
     * @return Response
     */
    public static function run() {
        $routerservice = new RouterService;
        $routerservice->run();
    }
}
