<?php

class HomeController extends Controller
{
    public function index()
    {
//        var_dump($_SESSION['login']);
        return $this->view('index', $data);
    }
}