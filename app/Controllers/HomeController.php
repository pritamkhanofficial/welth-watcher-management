<?php

namespace App\Controllers;
use App\Libraries\GroceryCrud;
use App\Models\WebsiteModel;


class HomeController extends BaseController
{
    public $websiteModel = NULL;
    public function __construct(Type $var = null) {
        $this->websiteModel = new WebsiteModel();
    }
    
    public function Slider(){
        /* $array = [
            'image',
            'image_2'=>'document',
        ];
        getPrint($array);
        foreach ($array as $field => $file_type) {
            if(is_array($file_type)){
                echo 'true';
            }else{
                echo 'false';
            }
            echo  '<br>';
        }
        die; */
        $crud = new GroceryCrud();
        // $crud->displayAs('file_1','Slider');
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['file_1','file_2','content', 'is_active']);
        $crud->fields(['file_1','file_2','content', 'is_active','created_by','updated_at','updated_by']);
        // $this->fileUpload($crud, 'image','image');
        
        // $this->setFieldImage(['image']);
        $this->setFieldUpload($crud, [
            'file_1'=>[
                'file_type'=>'image'
            ],
            'file_2'=>[
                'file_type'=>'document'
            ],
        ]);
        /* $this->fileUploadMultiField($crud, [
            'image'=>'image',
            'image_2'=>'document',
        ]); */
        // $crud->unsetDelete();
        // $crud->unsetAdd();
        if ($crud->getState() === 'delete') {
            
            $result = $this->websiteModel->softDelete('sliders', $crud->getStateInfo()->primary_key);
            // getPrint($result);
            if($result){
                return $this->response->setJSON([
                    'success'=>true,
                    'success_message'=>"<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
            
        }
        $crud->unsetPrint();
        $crud->unsetExport();
        /* $crud->callbackBeforeUpdate(function ($stateParameters) {
            return $this->saveLogData('edit','state',$stateParameters->data);
        }); */
        $crud->setTable('sliders');
        $crud->setSubject('Slider');
        $output = $crud->render();
        return view('common', (array)$output);
    }
    public function Documents(){
        $crud = new GroceryCrud();
        $crud->displayAs('file','Document File');
        $crud->displayAs('doc_type','Document Type');
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['title','file', 'doc_type', 'is_active']);
        $crud->fields(['title','file', 'doc_type', 'is_active','created_by','updated_at','updated_by']);
        $crud->fieldType('doc_type', 'dropdown', [
            'NOTICE' => 'Notice',
            'TENDER' => 'Tender',
            'NE' => 'News / Events',
            'ARS' => 'Anti Ragging Section',
            'MENU' => 'Nav Menu'
        ]);
        $this->fileHandle($crud, 'file','document');

        if ($crud->getState() === 'delete') {
            
            $result = $this->websiteModel->softDelete('documents', $crud->getStateInfo()->primary_key);
            if($result){
                return $this->response->setJSON([
                    'success'=>true,
                    'success_message'=>"<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
            
        }
        $crud->unsetPrint();
        $crud->unsetExport();
        $crud->setTable('documents');
        $crud->setSubject('Document');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function Gallery(){
        $crud = new GroceryCrud();
        $crud->displayAs('image','Gallery Image');
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['title','image', 'is_active']);
        $crud->fields(['title','image', 'is_active','created_by','updated_at','updated_by']);
        $this->fileHandle($crud, 'image','image');

        if ($crud->getState() === 'delete') {
            
            $result = $this->websiteModel->softDelete('gallery', $crud->getStateInfo()->primary_key);
            if($result){
                return $this->response->setJSON([
                    'success'=>true,
                    'success_message'=>"<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
            
        }
        $crud->unsetPrint();
        $crud->unsetExport();
        $crud->setTable('gallery');
        $crud->setSubject('Gallery');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function aboutHospital(){
        
        $webModel = new WebsiteModel();
        $crud = new GroceryCrud();
        $crud->displayAs('history_and_heritage','History and Heritage');
        $crud->displayAs('description','About');
        $crud->displayAs('is_active','Status');
        // $crud->where("deleted_at", NULL);
        $crud->columns(['affiliated_to','vice_chancellor', 'registrar', 'year_of_affiliation']);
        $crud->fields(['affiliated_to','vice_chancellor', 'registrar', 'year_of_affiliation','description', 'history_and_heritage', 'map', 'address', 'created_by','updated_by']);
        $crud->setTexteditor(['description', 'history_and_heritage','address']);
        // $crud->setFieldUpload(['file', 'is_active','created_by']);
        $crud->callbackColumn('file', array($this, 'showFile'));
        $crud->fieldType('created_by', 'hidden', getUserData()->id);
        $crud->fieldType('updated_by', 'hidden', getUserData()->id);
        /* $crud->callbackAfterInsert(function ($stateParameters) {
            return $this->saveLogData('add','state',$stateParameters->data);
        }); */
        
        $crud->callbackBeforeUpdate(
            function ($cbData) {    
                $cbData->data['updated_by'] = \getUserData()->id;
 
                return $cbData;
            }
        );


        $crud->unsetDelete();
        if($webModel->getCountAboutHospital() >= 1){

            $crud->unsetAdd();
        }
        $crud->unsetPrint();
        $crud->unsetExport();
        /* $crud->callbackBeforeUpdate(function ($stateParameters) {
            return $this->saveLogData('edit','state',$stateParameters->data);
        }); */
        $crud->setTable('about_hospital');
        $crud->setSubject('About Hospital');
        $output = $crud->render();
        return view('common', (array)$output);
    }


    public function cryptocurrencyTrading(){
        
        $crud = new GroceryCrud();
        $crud->displayAs('icon_text','Set Font Icon');
        $crud->displayAs('description','Content');
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['title','icon_text', 'is_active']);
        $crud->fields(['title','icon_text', 'description', 'is_active']);
        $crud->setTexteditor(['description']);


        $crud->unsetDelete();
        
        $crud->unsetPrint();
        $crud->unsetExport();

        $crud->setTable('cryptocurrency_trading');
        $crud->setSubject('Cryptocurrency Trading');
        $output = $crud->render();
        return view('common', (array)$output);
    }


    public function coreNeed(){
        
        $crud = new GroceryCrud();
        $crud->displayAs('icon_text','Set Font Icon');
        $crud->displayAs('description','Content');
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['title','icon_text', 'is_active']);
        $crud->fields(['title','icon_text', 'description', 'is_active']);
        $crud->setTexteditor(['description']);


        $crud->unsetDelete();
        
        $crud->unsetPrint();
        $crud->unsetExport();

        $crud->setTable('core_need');
        $crud->setSubject('Core Need');
        $output = $crud->render();
        return view('common', (array)$output);
    }
    public function newsCategory()
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
    public function news(){
        
        $crud = new GroceryCrud();
        $crud->displayAs('news_category_id','News Category');
        $crud->displayAs('content','Content');
        $crud->displayAs('is_active','Status');
        $crud->where("news.deleted_at", NULL);
        $crud->setRelation('news_category_id', 'news_category', 'label', ['is_active' => 1,'deleted_at'=>NULL]);

        $crud->columns(['title','news_category_id', 'published_status','is_active']);
        $crud->fields(['title','news_category_id', 'content', 'published_status', 'is_active']);


        $crud->setTexteditor(['content']);


        $crud->unsetDelete();
        
        $crud->unsetPrint();
        $crud->unsetExport();

        $crud->setTable('news');
        $crud->setSubject('News');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function state(){
        
        $crud = new GroceryCrud();
        
        $crud->displayAs('is_active','Status');
        
        $crud->columns(['label','is_active']);
        $crud->fields(['label','is_active']);


        $crud->unsetDelete();
        
        $crud->unsetPrint();
        $crud->unsetExport();


        $crud->setTable('state');
        $crud->setSubject('State');
        $output = $crud->render();
        return view('common', (array)$output);
    }


}
