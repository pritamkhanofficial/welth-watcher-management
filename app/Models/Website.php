<?php

namespace App\Models;

use CodeIgniter\Model;

class Website extends Model
{
    protected $table = 'core_need';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'icon_text', 'description'];
    public function home(){
        
    }
}
