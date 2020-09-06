<?php

class Users
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($request)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email = :email');
        $this->db->bind('email', $request['email']);
        $this->db->execute();

        $row = $this->db->first();

        if (password_verify($request['password'], $row['password'])) {
            $_SESSION['login'] = [
                'email' => $row['email'],
                'username' => $row['username'],
                'role' => $row['role']
            ];
            return $this->db->rowCount();
        } else {
            echo 'invalid';
        }
    }

    public function register($request)
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        $row = $this->db->all();

        foreach ($row as $item) {
            var_dump($item['email']);
            if ($item['email'] == $request['email']) {
                die('data yang dimasukan sudah ada');
            } else {
                $query = "INSERT INTO " . $this->table . " (email,password,username) VALUES (:email,:password,:username)";
                $this->db->query($query);
                $hash = password_hash($request['password'], PASSWORD_BCRYPT, ['cost' => 8]);
                $this->db->bind('email', $request['email']);
                $this->db->bind('password', $hash);
                $this->db->bind('username', $request['username']);

                $this->db->execute();

                return $this->db->rowCount();
            }
        }


    }
}