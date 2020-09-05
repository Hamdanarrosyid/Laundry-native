<?php
require "../vendor/autoload.php";
use eftec\bladeone\BladeOne;

class Controller {
    public function view($view,$data=[])
    {
        $views = '../resources/views';
        $cache = '../resources/cache';
        $blade = new BladeOne($views,$cache);
        var_dump($data['outlet']);
        echo $blade->run($view,array('data'=>$data));
    }
    public function model($model)
    {
        require_once "../app/models/".$model.".php";
        return new $model;
    }
}