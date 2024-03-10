<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Sesion extends BaseController
{
    public function index()
    {
        $this->data['content'] = 'sesion/login';
        return view('main/main', $this->data);
    }
}
