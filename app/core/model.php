<?php
require 'admin/settings/settings.php';
class Model {

    protected $mysql;

    function __construct()
    {
        $this->mysql = @new mysqli(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);

        if(mysqli_connect_errno()){
            die(mysqli_connect_error());
        }
    }
     public function get_data(){

    }
} 
