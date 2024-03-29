<?php

namespace App\Models;

use CodeIgniter\Model;

class Website extends Model
{
    public function home(){
        $data = [];
        $data['core_need'] =  $this->db->table('core_need')->where(['deleted_at'=>NULL,'is_active'=>1])->orderBy('created_at','DESC')->limit(4)->get()->getResult();
        $data['news'] = $this->db->table('news')->join('news_category', 'news_category.id = news.news_category_id', 'left')->where(['news.deleted_at'=>NULL,'news.is_active'=>1])->orderBy('news.created_at','DESC')->limit(3)->get()->getResult();
        return $data;
    }
    public function about(){
        $data = [];
        $data['services'] =  $this->db->table('services')->where(['deleted_at'=>NULL,'is_active'=>1])->orderBy('created_at','DESC')->limit(4)->get()->getResult();
        $data['partner'] =  $this->db->table('partners')->where(['deleted_at'=>NULL,'is_active'=>1])->orderBy('created_at','DESC')->limit(4)->get()->getResult();
        return $data;
    }

    public function contact(){
        $data = [];
        $data['state'] = $this->db->table('state')->where(['deleted_at'=>NULL,'is_active'=>1])->orderBy('label', 'ASC')->get()->getResult();
        // getPrint($data['state']);
        return $data;
    }
    public function submitContact($data){
        return $this->db->table('contact')->insert($data);
    }
    public function budgetPlanning($data){
        return $this->db->table('register')->insert($data);
    }
    public function getBudgetPlanning($id){
        return $this->db->table('register')->where(['user_id'=>$id])->get()->getRow();
    }
    public function submitRegister($data){
        return $this->db->table('users')->insert($data);
    }
    public function checkMail($email_data){
        return $this->db->table('users')->where('email', $email_data)->get()->getNumRows();
    }

    
}



