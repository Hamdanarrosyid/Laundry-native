<?php
class OutletController extends Controller {
    public function index()
    {
        $data['outlet'] = $this->model('outlet')->getAll();
//        var_dump($data);
        return $this->view('outlet',$data);
    }
    public function store(){
        var_dump($_POST);
    }
}