<?php

class crudOperation
{
    private $conn;

    public function __construct()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "crudoperation";

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (!$this->conn) {
            die("Database Connection Failed");
        }
    }

    public function add_data($data)
    {
        $user_name = $data['name'];
        $user_email = $data['email'];
        $user_phone = $data['mobile'];
        $user_pass = $data['password'];

        $query = "INSERT INTO crud(user_name, user_email, user_phone, user_password) VALUE ('$user_name', '$user_email', $user_phone, '$user_pass')";

        if (mysqli_query($this->conn, $query)) {
            //return "Information Added Successfully";
            header('location:display.php'); 
        }
    }

    public function display_data()
    {
        $query = "SELECT * FROM crud";

        if (mysqli_query($this->conn, $query)) {
            $return_data  = mysqli_query($this->conn, $query);
            return $return_data;
        }
    }


    public function display_data_by_id($id)
    {
        $query = "SELECT * FROM crud WHERE id = $id";

        if (mysqli_query($this->conn, $query)) {
            $returndata = mysqli_query($this->conn, $query);
            $userData = mysqli_fetch_assoc($returndata);
            return $userData;
        }
    }

    public function update_data ($data) {
        $user_name = $data['u_user_name'];
        $user_email = $data['u_user_email'];
        $idno = $data['user_id'];
        $user_phone = $data['u_user_mobile'];
        $user_pass = $data['u_user_password'];

        $query = "UPDATE crud SET user_name = '$user_name', user_email = '$user_email', user_phone = $user_phone, user_password = '$user_pass' WHERE id = $idno";

        if(mysqli_query($this->conn, $query)){
            //return "Information Updated Successfully!";
            header('location:display.php');
        }
    }


    public function delete_data ($id) {
        $query = "DELETE FROM crud WHERE id = $id";

        if(mysqli_query($this->conn, $query)){
            //return "Deleted Successfully";
            header('location:display.php');
        }
    }
}
