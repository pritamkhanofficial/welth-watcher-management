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
        $data = $this->model->findAll();
        // echo "<pre>"; print_r($data); die;
        return view('website/home', ['data' => $data]);
    }
}
