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

        if($this->request->getVar('submit')){
            $data = [
                'name' =>$this->request->getVar('name'),
                'email' =>$this->request->getVar('email'),
                'phone_no' =>$this->request->getVar('phone_no'),
                'state_id' =>$this->request->getVar('state'),
                'city' =>$this->request->getVar('city'),
                'zip_code' =>$this->request->getVar('zip_code'),
                'message' =>$this->request->getVar('message'),
                'created_at' =>\getCurrentDate(),
            ];

            
            $result = $this->model->submitContact($data);
            if($result){
                return $this->response->setJSON([
                    'success'=>true,
                    'message'=>'Thank You for Contacting Us!',
                ]);
            }else{
                return $this->response->setJSON([
                    'success'=>false,
                    'message'=>'!Oops something went wrong. Please try again.',
                ]);
            }

        }
        $result = $this->model->contact();
        return view('website/contact', ['data' => $result]);
    }

    public function about()
    {
        $result = $this->model->about();
        return view('website/about', ['data' => $result]);
    }
    public function register()
    {
        // $result = $this->model->about();
        return view('website/register');
    }
}
