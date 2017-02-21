<?php
require 'db/DbManager.php';

class BaseModel extends DbManager {

    /**
     * Build Query
     *
     * @return Response
     */
    public function sqlQuestion($currentQuery) 
    {
        $result = $this->build_query($currentQuery);
        return $result;
    }
}