<?php

class ConfigService {

    private $config;

    /**
     * Return Config Object
     *
     * @return Response
     */
    public function __construct() {
        $this->config = require_once CONFIG_PATH . DS . 'config.php';
    }

    /**
     * Return Config Data
     *
     * @return Array
     */
    public function getConfigs() {
        return $this->config;
    }

}