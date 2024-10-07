<?php

class User
{
    public $id;
    public $username;
    public $password;

    public function __construct($id = null, $username, $passsword)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $passsword;
    }

    //Metode ove klase

    public static function loginUser($username, $passsword, mysqli $conn)
    {
        $q = "SELECT * FROM user WHERE username='$username' AND password='$passsword'";
        //izmeniti
        return $conn->query($q);
    }
}
