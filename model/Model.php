<?php
include 'Database.php';

class Model extends Database {

    protected $table;
    protected $db;
    public function __construct()
    {
        parent::__construct();
    }

}

