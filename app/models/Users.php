<?php

class Users {
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($request)
    {
        $this->db->query('SELECT * FROM ' . $this->table.' WHERE email = :email');
        $this->db->bind('email',$request['email']);
        $this->db->execute();

        $row = $this->db->first();

        if (password_verify($request['password'],$row['password'])){
            $_SESSION['login'] = [
              'email' => $row['email'],
              'role' => $row['role']
            ];
            return $this->db->rowCount();
        }else{
            echo 'invalid';
        }
    }

    public function register($request)
    {
        $query = "INSERT INTO ".$this->table." (email,password) VALUES (:email,:password)";
        $this->db->query($query);
        $hash = password_hash($request['password'],PASSWORD_BCRYPT,['cost'=>8]);
        $this->db->bind('email',$request['email']);
        $this->db->bind('password',$hash);

        $this->db->execute();

        return $this->db->rowCount();

    }
}