<?php
require_once 'ConfigService.php';

class RouterService
{

    private $defaultController = NULL;
    private $defaultAction = NULL;
    private $configs = array();

    /**
     * Make Config Object
     *
     * @return Response
     */
    public function __construct()
    {
        $configService = new ConfigService();
        $this->configs = $configService->getConfigs();
    }

    /**
     * Custom Router
     *
     * @return Response
     */
    public function run(){
        if(isset($_REQUEST['q'])) {
            $request = $_REQUEST['q'];
            $url = explode('/', $request);
            if (!isset($url[0]) or $url[0] == '') {
                $currentController = $this->configs['defaultController'];
                $currentAction = $this->configs['defaultAction'];
            } else {
                $currentController = $url[0].'Controller';
            }
            if (!isset($url[1]) or $url[1] == '') {
                $currentController = $this->configs['defaultController'];
                $currentAction = $this->configs['defaultAction'];
            } else {
                $currentAction = $url[1];
            }
            $fileName = CONTROLLER_PATH . DS . ucfirst($currentController) .'.php';
        } else {
            $currentController = $this->configs['defaultController'];
            $currentAction = $this->configs['defaultAction'];
            $fileName = CONTROLLER_PATH . DS . $currentController. '.php';
        }
        if (file_exists($fileName)) {
            require $fileName;
            if (class_exists($currentController)) {
                $currentObject = new $currentController;
                if (method_exists($currentObject, $currentAction)) {
                    return $currentObject->$currentAction();
                } else {
                    echo 'undefined method';
                }
            } else {
                echo 'class not found';
            }
        } else {
            echo 'file not found';
        }        
    }
}

