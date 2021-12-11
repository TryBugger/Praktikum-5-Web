<?php

namespace App\Controllers;

use App\Models\Devices;

class DeviceController extends BaseController
{
    protected $database;

    public function __construct() {
        $this->database = new Devices();
    }

    public function index()
    {
        $datas = [
            'title' => 'Device | Office IOT Monitoring',
            'activeNav' => ['', ' active'],
            'dataDevice' => $this->database->findAll()
        ];

        echo view('pages/device', $datas);
    }
}
