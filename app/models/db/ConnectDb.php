<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/27/2015
 * Time: 9:49 PM
 */
require CONFIG_PATH.DS.'config.php';

class ConnectDb {

    private $connection = NULL;

    /**
     * Make DB Connection
     *
     * @return Response
     */
    public function __construct()
    {
        $configs = new ConfigService();
        try {
           $this->connection = new PDO('mysql:host='.$configs->getConfigs()['db']['host'].';dbname=plugin', $configs->getConfigs()['username'], $configs->getConfigs()['password']);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    /**
     * Return Connection
     *
     * @return Response
     */
    public function getConnection() {
        return $this->connection;
    }
}