<?php

class Home extends Controller {
    public function index()
    {
        $data['makanan']='roti';
        $data['minuman']='SUES';
        return $this->view('index',$data);
    }
}