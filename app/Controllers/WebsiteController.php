<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Website;
class WebsiteController extends BaseController
{
    protected $model = NULL;
    public function __construct() {
        $this->model = new Website();
    }
    public function home()
    {
        $result = $this->model->home();
        return view('website/home', ['data' => $result]);
    }
    public function contact()
    {
        $result = $this->model->contact();
        return view('website/contact', ['data' => $result]);
    }
}
