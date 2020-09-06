<?php

class Cucian
{
    private $table = 'cucian';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->all();
    }

    public function storeOutlet($request)
    {
        $query = "INSERT INTO outlet (no_pakaian,pemilik_id,kasir_id) VALUES (:no_pakaian,:pemilik_id,:kasir_id)";
        $this->db->query($query);
        $this->db->bind('no_pakaian',$request['no_pakaian']);
        $this->db->bind('pemilik_id',$request['pemilik_id']);
        $this->db->bind('kasir_id',$request['kasir_id']);

        $this->db->execute();

        return $this->db->rowCount();

    }
}