<?php

namespace App\Controllers;
use App\Libraries\GroceryCrud;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BlogCategory extends BaseController
{
    public function category()
    {
        $crud = new GroceryCrud();
        // $crud->displayAs('facebook_url','twitter_url','linkedin_url','youtube_url','mobile_no','address');
        // $crud->displayAs('description','Content');
        $crud->displayAs('is_active','Status');
        // $crud->where("deleted_at", NULL);
        $crud->columns(['label','is_active']);
        $crud->fields(['label','is_active']);
        // $crud->setTexteditor(['address']);
        // $crud->unsetAdd();


        $crud->unsetDelete();
        
        $crud->unsetPrint();
        $crud->unsetExport();

        $crud->setTable('news_category');
        $crud->setSubject('News Category');
        $output = $crud->render();
        return view('common', (array)$output);
    }
}
