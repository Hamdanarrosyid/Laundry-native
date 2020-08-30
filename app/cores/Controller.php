<?php
require "../vendor/autoload.php";
use eftec\bladeone\BladeOne;

class Controller {
    public function view($view,$data=[])
    {
        $views = '../resources/views';
        $cache = '../resources/cache';
        $blade = new BladeOne($views,$cache);
        echo $blade->run("$view",compact('data'));
    }
}