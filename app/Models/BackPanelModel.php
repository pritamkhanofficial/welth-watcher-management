<?php

namespace App\Models;

use CodeIgniter\Model;
class BackPanelModel extends Model
{
    public function getNewsCategory(){
        return $this->db->table('news_category')->select('id,label')->where(['is_active'=>1,'deleted_at'=>NULL])->get()->getResult();
    }
    public function addNews($postData){

        $postData['slug'] = slug($postData['title']);
        if($postData['published_status'] == 'published'){
            $postData['published_at'] = date('Y-m-d H:i:s');
            $postData['published_by'] = getUserData()->id;
        }
        $postData['created_at'] = date('Y-m-d H:i:s');
        $postData['created_by'] = getUserData()->id;
        return $this->db->table('news')->insert($postData);
    }
}
