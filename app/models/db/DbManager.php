<?php
require 'ConnectDb.php';
class DbManager {

    /**
     * Return PDO Statment Object
     *
     * @return Response
     */
    public function build_query($currentQuery)
    {
        try
        {
            $connect = new ConnectDb;
            $pdoStatementObject = $connect->getConnection()->prepare($currentQuery);
            $pdoStatementObject->execute();
            return $pdoStatementObject;
        } catch(PDOException $exception){
            print 'error:'.$exception->getMessage();
        }
    }
}