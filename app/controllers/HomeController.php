<?php

class HomeController extends Controller
{
    public function index()
    {
        $data['data'] =
            [
                'makanan' => ['roti','cawet','kaleng'],
                'minuman' => ['es jerul','es tueh']
            ];

        return $this->view('index', $data);
    }
}