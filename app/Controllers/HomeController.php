<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $datas = [
            'title' => 'Home | Office IOT Monitoring',
            'activeNav' => [' active', ''],
            'css' => '/css/homeCss.css'
        ];
        echo view('pages/home', $datas);
    }
}
