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
    public function budgetPlanning($data,$type, $id = NULL){
        if($type == 'add'){
            return $this->db->table('register')->insert($data);
        }
        if($type == 'update'){
            return $this->db->table('register')->update($data,[
                'id'=>$id
            ]);
        }
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
    public function job(){
        $data = [];
        $data['job'] = $this->db->table('job')
            ->select('job.id, job.category, job.title, job.slug, job.description, job.job_type, job.location, job.is_active, job.created_at, job.created_by, job.updated_at, job.updated_by, job_category.label')
            ->join('job_category', 'job_category.id = job.category', 'left')
            ->where('job.is_active = 1')
            ->orderBy('job.created_at', 'DESC')
            ->limit(3)
            ->get()
            ->getResult();
        return $data;
    }

    public function job_detl($id){
       return  $this->db->table('job')->join('job_category', 'job_category.id = job.category', 'left')->where(['job.id'=>$id,'job.is_active'=>1])->orderBy('job.created_at','DESC')->get()->getRow();
    }

    public function jobCandidateAdd($data){
        return $this->db->table('job_candidate')->insert($data);
        
    }

    
}



