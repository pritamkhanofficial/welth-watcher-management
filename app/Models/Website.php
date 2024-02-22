<?php

namespace App\Models;

use CodeIgniter\Model;

class Website extends Model
{
    public function home(){
        $data = [];
        $data['core_need'] =  $this->db->table('core_need')->where(['deleted_at'=>NULL,'is_active'=>1])->orderBy('created_at','DESC')->limit(4)->get()->getResult();
        return $data;
    }
}
