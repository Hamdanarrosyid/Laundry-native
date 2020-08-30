<?php

class Home extends Controller {
    public function index()
    {
        $data = ['makanan','minuman'];
        return $this->view('index',$data);
    }
}