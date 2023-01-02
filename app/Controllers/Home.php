<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('home/index');
        echo view('common/footer');
    }
}
