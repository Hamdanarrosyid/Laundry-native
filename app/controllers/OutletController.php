<?php
class OutletController extends Controller {
    public function index()
    {
        $data['outlet'] = $this->model('outlet')->getAll();
//        var_dump($data);
        return $this->view('outlet',$data);
    }
    public function store(){
        if ($this->model('Outlet')->storeOutlet($_POST) > 0 ){
            Flasher::setMessage('berhasil','tambahkan');
            header('Location:'.BASEURL.'outlet');
            exit;
        }else{
            Flasher::setMessage('gagal','tambahkan');
            header('Location:'.BASEURL.'outlet');
            exit;
        }
    }
}