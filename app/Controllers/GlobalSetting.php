<?php

namespace App\Controllers;
use App\Libraries\GroceryCrud;


use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class GlobalSetting extends BaseController
{
    public function mannageGlobalSetting()
    {
        $crud = new GroceryCrud();
        /* $crud->displayAs('facebook_url','twitter_url','linkedin_url','youtube_url','mobile_no','address');
        $crud->displayAs('description','Content');
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL); */
        $crud->columns(['facebook_url','twitter_url','linkedin_url','youtube_url','mobile_no','address']);
        $crud->fields(['facebook_url','twitter_url','linkedin_url','youtube_url','mobile_no','address']);
        $crud->setTexteditor(['address']);
        $crud->unsetAdd();


        $crud->unsetDelete();
        
        $crud->unsetPrint();
        $crud->unsetExport();

        $crud->setTable('global_settings');
        $crud->setSubject('Global Setting');
        $output = $crud->render();
        return view('common', (array)$output);
    }
}
