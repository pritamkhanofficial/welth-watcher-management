<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class WebsiteController extends BaseController
{
    public function home()
    {
        return view('website/home');
    }
}
