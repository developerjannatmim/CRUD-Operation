<?php

class crudOperation{
    private $conn;

    public function __construct()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "crudoperation";

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if(!$this->conn){
            die("Database Connection Failed");
        }
    }

    public function add_data ($data) {
        $user_name = $data['name'];
        $user_email = $data['email'];
        $user_phone = $data['mobile'];
        $user_pass = $data['password'];

        $query = "INSERT INTO crud(user_name, user_email, user_phone, user_password) VALUE ('$user_name', $user_email, $user_phone, $user_pass)";

        if(mysqli_query($this->conn, $query)){
            return "Information Added Successfully";
        }
    }
}
