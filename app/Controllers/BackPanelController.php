<?php

namespace App\Controllers;

use App\Libraries\GroceryCrud;
use App\Models\WebsiteModel;
use App\Models\BackPanelModel;
use Cocur\Slugify\Slugify;

class BackPanelController extends BaseController
{
    public $websiteModel = NULL;
    public function __construct(Type $var = null)
    {
        $this->websiteModel = new WebsiteModel();
    }

    public function Slider()
    {
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
        $crud->displayAs('is_active', 'Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['file_1', 'file_2', 'content', 'is_active']);
        $crud->fields(['file_1', 'file_2', 'content', 'is_active', 'created_by', 'updated_at', 'updated_by']);
        // $this->fileUpload($crud, 'image','image');

        // $this->setFieldImage(['image']);
        $this->setFieldUpload($crud, [
            'file_1' => [
                'file_type' => 'image'
            ],
            'file_2' => [
                'file_type' => 'document'
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
            if ($result) {
                return $this->response->setJSON([
                    'success' => true,
                    'success_message' => "<p>Your data has been successfully deleted from the database.</p>",
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
    public function Documents()
    {
        $crud = new GroceryCrud();
        $crud->displayAs('file', 'Document File');
        $crud->displayAs('doc_type', 'Document Type');
        $crud->displayAs('is_active', 'Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['title', 'file', 'doc_type', 'is_active']);
        $crud->fields(['title', 'file', 'doc_type', 'is_active', 'created_by', 'updated_at', 'updated_by']);
        $crud->fieldType('doc_type', 'dropdown', [
            'NOTICE' => 'Notice',
            'TENDER' => 'Tender',
            'NE' => 'News / Events',
            'ARS' => 'Anti Ragging Section',
            'MENU' => 'Nav Menu'
        ]);
        $this->fileHandle($crud, 'file', 'document');

        if ($crud->getState() === 'delete') {

            $result = $this->websiteModel->softDelete('documents', $crud->getStateInfo()->primary_key);
            if ($result) {
                return $this->response->setJSON([
                    'success' => true,
                    'success_message' => "<p>Your data has been successfully deleted from the database.</p>",
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

    public function Gallery()
    {
        $crud = new GroceryCrud();
        $crud->displayAs('image', 'Gallery Image');
        $crud->displayAs('is_active', 'Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['title', 'image', 'is_active']);
        $crud->fields(['title', 'image', 'is_active', 'created_by', 'updated_at', 'updated_by']);
        $this->fileHandle($crud, 'image', 'image');

        if ($crud->getState() === 'delete') {

            $result = $this->websiteModel->softDelete('gallery', $crud->getStateInfo()->primary_key);
            if ($result) {
                return $this->response->setJSON([
                    'success' => true,
                    'success_message' => "<p>Your data has been successfully deleted from the database.</p>",
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

    public function aboutHospital()
    {

        $webModel = new WebsiteModel();
        $crud = new GroceryCrud();
        $crud->displayAs('history_and_heritage', 'History and Heritage');
        $crud->displayAs('description', 'About');
        $crud->displayAs('is_active', 'Status');
        // $crud->where("deleted_at", NULL);
        $crud->columns(['affiliated_to', 'vice_chancellor', 'registrar', 'year_of_affiliation']);
        $crud->fields(['affiliated_to', 'vice_chancellor', 'registrar', 'year_of_affiliation', 'description', 'history_and_heritage', 'map', 'address', 'created_by', 'updated_by']);
        $crud->setTexteditor(['description', 'history_and_heritage', 'address']);
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
        if ($webModel->getCountAboutHospital() >= 1) {

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


    public function cryptocurrencyTrading()
    {

        $crud = new GroceryCrud();
        $crud->displayAs('icon_text', 'Set Font Icon');
        $crud->displayAs('description', 'Content');
        $crud->displayAs('is_active', 'Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['title', 'icon_text', 'is_active']);
        $crud->fields(['title', 'icon_text', 'description', 'is_active']);
        $crud->setTexteditor(['description']);


        $crud->unsetDelete();

        $crud->unsetPrint();
        $crud->unsetExport();

        $crud->setTable('cryptocurrency_trading');
        $crud->setSubject('Cryptocurrency Trading');
        $output = $crud->render();
        return view('common', (array)$output);
    }


    public function coreNeed()
    {

        $crud = new GroceryCrud();
        $crud->displayAs('icon_text', 'Set Font Icon');
        $crud->displayAs('description', 'Content');
        $crud->displayAs('is_active', 'Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['title', 'icon_text', 'is_active']);
        $crud->fields(['title', 'icon_text', 'description', 'is_active']);
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
        $crud->displayAs('is_active', 'Status');
        // $crud->where("deleted_at", NULL);
        $crud->columns(['label', 'is_active']);
        $crud->fields(['label', 'is_active']);
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
    public function news()
    {

        $crud = new GroceryCrud();
        $crud->displayAs('news_category_id', 'News Category');
        $crud->displayAs('content', 'Content');
        $crud->displayAs('is_active', 'Status');
        $crud->where("news.deleted_at", NULL);
        $crud->setRelation('news_category_id', 'news_category', 'label', ['is_active' => 1, 'deleted_at' => NULL]);
        // $crud->callbackColumn('featured_image', array($this, 'showFile'));
        /*  $crud->callbackColumn('actions', function ($value, $row) {
            return "<a href='" . site_url('menu/' . $row->id) . "'>$value</a>";
        }); */


        // $crud->setApiUrlPath('https://demo.grocerycrud.com/set-api-url-path');
        $crud->columns(['title', 'news_category_id', 'featured_image', 'published_status', 'is_active']);
        $crud->fields(['title', 'news_category_id', 'featured_image', 'content', 'published_status', 'is_active', 'created_by', 'updated_at', 'updated_by', 'published_at', 'published_by', 'slug']);

        $crud->fieldType('created_by', 'hidden', getUserData()->id);
        $crud->fieldType('updated_at', 'hidden', NULL);
        $crud->fieldType('updated_by', 'hidden', NULL);
        $crud->fieldType('published_at', 'hidden', NULL);
        $crud->fieldType('published_by', 'hidden', NULL);
        $crud->fieldType('slug', 'hidden', NULL);

        if ($crud->getState() === 'delete') {

            $result = $this->websiteModel->softDelete('news', $crud->getStateInfo()->primary_key);
            if ($result) {
                return $this->response->setJSON([
                    'success' => true,
                    'success_message' => "<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
        }

        $crud->setTexteditor(['content']);
        // $crud->setActionButton('Edit', 'fa fa-edit', function ($value,$row) {
        //     return site_url('back-panel/edit-news/' . $value);
        // });
        // $crud->addButton('Custom Add', base_url('your_custom_add_url'));
        // $crud->addAction('Custom Add', 'fa fa-plus', 'your_custom_add_url');
        /*  $crud->setActionButton('Custom Add', 'fa fa-plus', function ($primaryKey) {
            return site_url('your_custom_add_url/' . $primaryKey);
        }); */
        $crud->requiredFields(['title', 'news_category_id']);
        /* Set File Upload */
        // getPrint($file_type);
        $accept = $this->getFileType('image');
        $crud->callbackColumn('featured_image', array($this, 'showFile'));
        $crud->callbackAddField(
            'featured_image',
            function () use ($accept) {
                return  '<input id="field-featured_image" type="file" class="form-control  " accept="' . $accept . '" name="featured_image" value="">';
            }
        );

        $crud->callbackEditField(
            'featured_image',
            function ($data)  use ($accept) {
                $path = base_url() . 'uploads/' . $data;

                $html = $this->showFile($data);
                $html .= '<input id="field-featured_image" type="file" class="form-control mt-2" accept="' . $accept . '" name="featured_image" value="">';

                $html .= '<input id="file_hidden_featured_image" type="hidden" class="form-control" name="file_hidden_featured_image" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackBeforeInsert(
            function ($cbData) {
                $file = $this->request->getFile('featured_image');
                if (isset($file)) {
                    $file_name = UploadFile($file);
                    $cbData->data['featured_image'] = $file_name;
                }
                $cbData->data['slug'] = slug($cbData->data['title']);
                if (empty($cbData->data['published_status'])) {
                    $cbData->data['published_status'] = 'draft';
                }
                if ($cbData->data['published_status'] == 'published') {
                    $cbData->data['published_at'] = \getCurrentDate();
                    $cbData->data['published_by'] = \getUserData()->id;
                } else {
                    $cbData->data['published_at'] = NULL;
                    $cbData->data['published_by'] = NULL;
                }
                return $cbData;
            }
        );
        $crud->callbackBeforeUpdate(
            function ($cbData) {
                $file = $this->request->getFile('featured_image');
                $file_hidden = $this->request->getVar('file_hidden_featured_image');
                if (isset($file)) {
                    $file_name = UploadFile($file, null, $file_hidden);
                    $cbData->data['featured_image'] = $file_name;
                } else {
                    $cbData->data['featured_image'] = $file_hidden;
                }
                if (empty($cbData->data['published_status'])) {
                    $cbData->data['published_status'] = 'draft';
                }
                $cbData->data['slug'] = slug($cbData->data['title']);
                $cbData->data['updated_at'] = getCurrentDate();
                $cbData->data['updated_by'] = getUserData()->id;
                if ($cbData->data['published_status'] == 'published') {
                    $cbData->data['published_at'] = \getCurrentDate();
                    $cbData->data['published_by'] = \getUserData()->id;
                } else {
                    $cbData->data['published_at'] = NULL;
                    $cbData->data['published_by'] = NULL;
                }
                return $cbData;
            }
        );
        /* --------------- */

        // $crud->unsetDelete();
        // $crud->unsetAdd();
        // $crud->unsetEdit();

        $crud->unsetPrint();
        $crud->unsetExport();

        $crud->setTable('news');
        $crud->setSubject('News');
        $output = $crud->render();
        // $output->page = 'news';
        // getPrint($output);
        return view('common', (array)$output);
    }

    public function state()
    {

        $crud = new GroceryCrud();

        $crud->displayAs('is_active', 'Status');

        $crud->columns(['label', 'is_active']);
        $crud->fields(['label', 'is_active']);


        $crud->unsetDelete();

        $crud->unsetPrint();
        $crud->unsetExport();


        $crud->setTable('state');
        $crud->setSubject('State');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function contact()
    {
        $crud = new GroceryCrud();
        // $crud->displayAs('facebook_url','twitter_url','linkedin_url','youtube_url','mobile_no','address');
        $crud->displayAs('state_id','State');
        $crud->displayAs('phone_no','Mobile');
        $crud->displayAs('is_active', 'Status');
        $crud->where("contact.deleted_at", NULL);
        $crud->columns(['name', 'email', 'phone_no', 'state_id', 'city', 'zip_code', 'is_active']);
        $crud->fields(['name', 'email', 'phone_no', 'state_id', 'city', 'zip_code', 'message', 'is_active']);
        $crud->readFields(['name', 'email', 'phone_no', 'state_id', 'city', 'zip_code', 'message']);
        // $crud->setTexteditor(['address']);
        $crud->setRelation('state_id', 'state', 'label');
        // $crud->unsetAdd();

        if ($crud->getState() === 'delete') {

            $result = $this->websiteModel->softDelete('contact', $crud->getStateInfo()->primary_key);
            if ($result) {
                return $this->response->setJSON([
                    'success' => true,
                    'success_message' => "<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
        }

        $crud->setRead();
        $crud->unsetAdd();
        $crud->unsetEdit();
        $crud->unsetDelete();

        $crud->unsetPrint();
        $crud->unsetExport();

        $crud->setTable('contact');
        $crud->setSubject('Contact List');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function services()
    {

        $crud = new GroceryCrud();
        $crud->displayAs('icon_text', 'Set Font Icon');
        $crud->displayAs('short_description', 'Description');
        $crud->displayAs('is_active', 'Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['title', 'short_description', 'is_active']);
        $crud->fields(['title', 'icon_text', 'short_description', 'containt', 'is_active']);
        $crud->setTexteditor(['containt']);


        $crud->unsetDelete();

        $crud->unsetPrint();
        $crud->unsetExport();

        $crud->setTable('services');
        $crud->setSubject('Services');
        $output = $crud->render();
        return view('common', (array)$output);
    }



    public function partner()
    {

        $crud = new GroceryCrud();

        $crud->displayAs('is_active', 'Status');

        $crud->columns(['label', 'image', 'is_active']);
        $crud->fields(['label', 'image', 'is_active', 'created_by', 'updated_at', 'updated_by']);
        $crud->where("deleted_at", NULL);

        // $crud->unsetDelete();
        $crud->unsetPrint();
        $crud->unsetExport();
        $crud->fieldType('created_by', 'hidden', getUserData()->id);
        $crud->fieldType('updated_at', 'hidden', NULL);
        $crud->fieldType('updated_by', 'hidden', NULL);

        if ($crud->getState() === 'delete') {

            $result = $this->websiteModel->softDelete('partners', $crud->getStateInfo()->primary_key);
            if ($result) {
                return $this->response->setJSON([
                    'success' => true,
                    'success_message' => "<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
        }


        $this->setFieldUpload($crud, [
            'image' => 'image'
        ]);
        $crud->setTable('partners');
        $crud->setSubject('partners');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function register()
    {
        $crud = new GroceryCrud();
        // $crud->displayAs('facebook_url','twitter_url','linkedin_url','youtube_url','mobile_no','address');
        // $crud->displayAs('description','Content');
        $crud->displayAs('is_active', 'Status');
        $crud->where("user_type", 'FRONT');
        $crud->where("deleted_at", NULL);
        $crud->columns(['full_name','username', 'email', 'mobile']);
        // $crud->fields(['budget_planning', 'household_size', 'age', 'income', 'income_frequency']);
        // $crud->setTexteditor(['address']);
        // $crud->unsetAdd();

        if ($crud->getState() === 'delete') {

            $result = $this->websiteModel->softDelete('users', $crud->getStateInfo()->primary_key);
            if ($result) {
                return $this->response->setJSON([
                    'success' => true,
                    'success_message' => "<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
        }
        $crud->unsetAdd();

        $crud->setActionButton('', 'fa fa-eye', function ($row) {
            return base_url('back-panel/client-budget/' . $row);
        }, true);
        // $crud->setReadFields(['id', 'created_at']);
        // $crud->unsetFilters();
        $crud->unsetEdit();
        $crud->setRead();
        // $crud->unsetDelete();

        $crud->unsetPrint();
        $crud->unsetExport();

        $crud->setTable('users');
        $crud->setSubject('Registration List');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function globalSettings()
    {
        $crud = new GroceryCrud();
        /* $crud->displayAs('facebook_url','twitter_url','linkedin_url','youtube_url','mobile_no','address');
        $crud->displayAs('description','Content');
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL); */
        $crud->columns(['facebook_url','pinterest_url','linkedin_url','youtube_url','mobile_no']);
        $crud->fields(['facebook_url','pinterest_url','linkedin_url','instagram_url','youtube_url','mobile_no','address','email','business_setup_growth','business_problem_solving','goal_achiever','passive_income_earners','footer_text']);
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

    public function clientBudget($id)
    {
        $data = [];
        $data['result'] = $this->websiteModel->clientBudget($id);
        if(empty($data['result'])){
            generateFlash([
                'type'=>'error',
                'title'=>'Error',
                'message'=>'Data not Found',
            ]);
            return redirect('back-panel/register');
        }
        return view('client-budget',$data);
    }

    public function jobCategory()
    {
        $crud = new GroceryCrud();
        // $crud->displayAs('facebook_url','twitter_url','linkedin_url','youtube_url','mobile_no','address');
        // $crud->displayAs('description','Content');
        $crud->displayAs('is_active', 'Status');
        // $crud->where("deleted_at", NULL);
        $crud->columns(['label', 'is_active']);
        $crud->fields(['label', 'is_active']);
        // $crud->setTexteditor(['address']);
        // $crud->unsetAdd();


        $crud->unsetDelete();

        $crud->unsetPrint();
        $crud->unsetExport();

        $crud->setTable('job_category');
        $crud->setSubject('Job Category');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function Job()
    {
        $crud = new GroceryCrud();
        $crud->displayAs('category', 'Category');
        $crud->displayAs('description', 'Description');
        $crud->displayAs('is_active');
        // $crud->where("job.deleted_at", " ");
        $crud->setRelation('category', 'job_category', 'label', ['is_active' => 1, 'deleted_at' => NULL]);
        // $crud->displayAs('is_active');
        $crud->columns(['title','job_type','location','is_active']);
        $crud->fields(['title', 'description', 'category','job_type','location','is_active']);
        $crud->setTexteditor(['description']);
        $crud->unsetDelete();
        $crud->unsetPrint();
        $crud->unsetExport();
        $crud->setTable('job');
        $crud->setSubject('Jobs');
        $output = $crud->render();
        return view('common', (array)$output);
    }
    public function JobCandidate()
    {
        $crud = new GroceryCrud();
        $crud->displayAs('category', 'Category');
        $crud->displayAs('description', 'Description');
        $crud->displayAs('job_id', 'Apply For');
        $crud->displayAs('is_active');
        // $crud->where("job.deleted_at", " ");
        $crud->setRelation('job_id', 'job', 'title', ['is_active' => 1, 'deleted_at' => NULL]);
        // $crud->displayAs('is_active');
        $crud->columns(['candidate_name','mobile','email','job_id','attachment','description']);
        // $crud->fields(['candidate_name', 'mobile', 'email','job_type','location','is_active']);
        $crud->setTexteditor(['description']);
        $crud->callbackColumn('attachment', array($this, 'showFile'));
        $crud->unsetDelete();
        $crud->unsetAdd();
        $crud->unsetEdit();
        $crud->unsetPrint();
        $crud->unsetExport();
        $crud->setTable('job_candidate');
        $crud->setSubject('Jobs');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function databaseBackup(){
        $dbutil = \Config\Database::utils();

        $dbutil->backup();
    }

    public function area()
    {
        $crud = new GroceryCrud();

        $crud->displayAs('is_active', 'Status');

        $crud->columns(['label', 'is_active']);
        $crud->fields(['label', 'is_active']);


        $crud->unsetDelete();

        $crud->unsetPrint();
        $crud->unsetExport();


        $crud->setTable('area');
        $crud->setSubject('Area');
        $output = $crud->render();
        return view('common', (array)$output);
    }

}
