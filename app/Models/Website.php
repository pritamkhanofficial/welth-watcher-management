<?php

namespace App\Models;

use CodeIgniter\Model;

class Website extends Model
{
    public function home(){
        $data = [];
        $data['core_need'] =  $this->db->table('core_need')->where(['deleted_at'=>NULL,'is_active'=>1])->orderBy('created_at','DESC')->limit(4)->get()->getResult();
        $data['news'] = $this->db->table('news')->select('news.*, news_category.label,users.full_name')->join('news_category', 'news_category.id = news.news_category_id', 'left')->join('users', 'users.id = news.published_by AND users.user_type = "BACK"', 'inner')->where(['news.deleted_at'=>NULL,'news.is_active'=>1])->orderBy('news.created_at','DESC')->limit(3)->get()->getResult();
        // \getQuery();
        // getPrint($data['news']);
        /* foreach($data['news'] as $key=>$row){ getPrint(dateDiff($row->created_at)) ;
        } */
        return $data;
    }
    public function about($limit = 4){
        $data = [];
        $query =   $this->db->table('services');
        $query->where(['deleted_at'=>NULL,'is_active'=>1]);
        if($limit == 2){
            $query->limit($limit);
        }else{
            $query->limit($limit);
        }
        $query->orderBy('created_at','DESC');
        return  $query->get()->getResult();
        /* $data['partner'] =  $this->db->table('partners')->where(['deleted_at'=>NULL,'is_active'=>1])->orderBy('created_at','DESC')->limit(4)->get()->getResult(); */
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

    public function getBudgetPlanningArea(){
        return $this->db->table('area')->where(['is_active'=>1])->orderBy('id', 'DESC')->get()->getResult();
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
    public function budgetPlanningSave($data,$table){
        $count = $this->db->table($table)->where(['user_id'=>$data['user_id']])->get()->getNumRows();
        if($count == 0){
            return $this->db->table($table)->insert($data);
        }else{
            return $this->db->table($table)->update($data,[
                'user_id'=>$data['user_id']
            ]);
        }
    }
    public function getBudgetPlanning($id){
        $basis =  $this->db->table('basic')
                  ->select('basic.*, area.label AS area_name')
                  ->join('area','area.id=basic.area_id','left')
                  ->where(['user_id'=>$id])->get()->getRowArray();
        $basis = is_null($basis) ? [] : $basis;
        $income =  $this->db->table('income')->where(['user_id'=>$id])->get()->getRowArray();
        $income = is_null($income) ? [] : $income;
        $spending =  $this->db->table('spending')->where(['user_id'=>$id])->get()->getRowArray();
        $spending = is_null($spending) ? [] : $spending;
        $retirement =  $this->db->table('retirement')->where(['user_id'=>$id])->get()->getRowArray();
        $retirement = is_null($retirement) ? [] : $retirement;
        $assets =  $this->db->table('assets')->where(['user_id'=>$id])->get()->getRowArray();
        $assets = is_null($assets) ? [] : $assets;
        $debt =  $this->db->table('debt')->where(['user_id'=>$id])->get()->getRowArray();
        $debt = is_null($debt) ? [] : $debt;        
        $data = array_merge($basis,$income,$spending,$retirement,$assets,$debt);
        $data = (object)$data;
        return $data;
        // getPrint($data);
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

            $data['job_cat'] = $this->db->table('job_category')
                ->select('id, label')
                ->get()
                ->getResult();
        return $data;
    }

    public function getAllJob($search,$job_category,$job_type){
        $query =  $this->db->table('job');
        $query->select('job.id, job.category, job.title, job.slug, job.description, job.job_type, job.location, job.is_active, job.created_at, job.created_by, job.updated_at, job.updated_by, job_category.label');
        $query->join('job_category', 'job_category.id = job.category', 'left');
        $query->where('job.is_active', 1);
        if(!empty($search)){
            $query->groupStart();
                $query->like('job.title', $search);
                $query->orLike('job.description', $search);
                $query->orLike('job.location', $search);
            $query->groupEnd();
            
        }
        if(!empty($job_category)){
            $query->where('job.category', $job_category);
        }
        if(!empty($job_type)){
            $query->where('job.job_type', $job_type);
        }
        $query->orderBy('job.created_at', 'DESC');
        if(empty($search) && empty($job_category) && empty($job_type)){
            $query->limit(3);
        }
        return $query->get()->getResult();
    }

    public function job_cat()
    {

    }

    public function job_detl($id){
       return  $this->db->table('job')->join('job_category', 'job_category.id = job.category', 'left')->where(['job.id'=>$id,'job.is_active'=>1])->orderBy('job.created_at','DESC')->get()->getRow();
    }

    public function jobCandidateAdd($data){
        return $this->db->table('job_candidate')->insert($data);
        
    }

    
}



