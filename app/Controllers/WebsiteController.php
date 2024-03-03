<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Website;
class WebsiteController extends BaseController
{
    protected $model = NULL;
    public function __construct() {
        $this->model = new Website();
    }
    public function home()
    {
        $result = $this->model->home();
        return view('website/home', ['data' => $result]);
    }
    public function contact()
    {

        if($this->request->getVar('submit')){
            // getPrint($this->request->getVar());
            $data = [
                'name' =>$this->request->getVar('name'),
                'email' =>$this->request->getVar('email'),
                'phone_no' =>$this->request->getVar('phone_no'),
                'state_id' =>$this->request->getVar('state'),
                'city' =>$this->request->getVar('city'),
                'zip_code' =>$this->request->getVar('zip_code'),
                'message' =>$this->request->getVar('message'),
                'created_at' =>\getCurrentDate(),
            ];

            
            $result = $this->model->submitContact($data);
            if($result){
                return $this->response->setJSON([
                    'success'=>true,
                    'message'=>'Thank You for Contacting Us!',
                ]);
            }else{
                return $this->response->setJSON([
                    'success'=>false,
                    'message'=>'!Oops something went wrong. Please try again.',
                ]);
            }

        }
        $result = $this->model->contact();
        return view('website/contact', ['data' => $result]);
    }

    public function about()
    {
        $result = $this->model->about();
        return view('website/about', ['data' => $result]);
    }
    public function register()
    {
        if($_POST){
            // getPrint($this->request->getVar());

            $data = [
                'budget_planning' => $this->request->getVar('budget_planning'),
                'household_size' => $this->request->getVar('household_size'),
                'age' => $this->request->getVar('age'),
                'offers_promotions' => $this->request->getVar('offers_promotions'),
                'income' => $this->request->getVar('income'),
                'income_frequency' => $this->request->getVar('income_frequency'),
                'income_after_taxes' => $this->request->getVar('income_after_taxes'),
                'income_after_taxes_frequency' => $this->request->getVar('income_after_taxes_frequency'),
                'social_security_taxes' => $this->request->getVar('social_security_taxes'),
                'social_security_taxes_frequency' => $this->request->getVar('social_security_taxes_frequency'),
                'food_and_beverages' => $this->request->getVar('food_and_beverages'),
                'food_and_beverages_frequency' => $this->request->getVar('food_and_beverages_frequency'),
                'clothes' => $this->request->getVar('clothes'),
                'clothes_frequency' => $this->request->getVar('clothes_frequency'),
                'housing' => $this->request->getVar('housing'),
                'housing_frequency' => $this->request->getVar('housing_frequency'),
                'transportation' => $this->request->getVar('transportation'),
                'transportation_frequency' => $this->request->getVar('transportation_frequency'),
                'healthcare_and_personal_care' => $this->request->getVar('healthcare_and_personal_care'),
                'healthcare_and_personal_care_frequency' => $this->request->getVar('healthcare_and_personal_care_frequency'),
                'entertainment' => $this->request->getVar('entertainment'),
                'entertainment_frequency' => $this->request->getVar('entertainment_frequency'),
                'education' => $this->request->getVar('education'),
                'education_frequency' => $this->request->getVar('education_frequency'),
                'other_expenses' => $this->request->getVar('other_expenses'),
                'other_expenses_frequency' => $this->request->getVar('other_expenses_frequency'),
                'retirement_savings_amount' => $this->request->getVar('retirement_savings_amount'),
                'retirement_savings_frequency' => $this->request->getVar('retirement_savings_frequency'),
                'employer_contribution' => $this->request->getVar('employer_contribution'),
                'employer_contribution_frequency' => $this->request->getVar('employer_contribution_frequency'),
                'starting_age_for_saving' => $this->request->getVar('starting_age_for_saving'),
                'bank_accounts_value' => $this->request->getVar('bank_accounts_value'),
                'investment_accounts_value' => $this->request->getVar('investment_accounts_value'),
                'home_value' => $this->request->getVar('home_value'),
                'rental_properties_value' => $this->request->getVar('rental_properties_value'),
                'vehicles_value' => $this->request->getVar('vehicles_value'),
                'other_assets_value' => $this->request->getVar('other_assets_value'),
                'retirement_savings_value' => $this->request->getVar('retirement_savings_value'),
                'emergency_assets_value' => $this->request->getVar('emergency_assets_value'),
                'mortgage_loans_value' => $this->request->getVar('mortgage_loans_value'),
                'business_debt_value' => $this->request->getVar('business_debt_value'),
                'vehicle_loans_value' => $this->request->getVar('vehicle_loans_value'),
                'credit_card_debt_value' => $this->request->getVar('credit_card_debt_value'),
                'student_debt_value' => $this->request->getVar('student_debt_value'),
                'other_debts_value' => $this->request->getVar('other_debts_value'),
                'debt_payment_value' => $this->request->getVar('debt_payment_value'),
                'debt_payment_frequency' => $this->request->getVar('debt_payment_frequency'),
            ];

            $result = $this->model->register($data);
            if($result){
                return $this->response->setJSON([
                    'success'=>true,
                    'message'=>'Thank you for registering! Your information has been successfully submitted.',
                ]);
            }else{
                return $this->response->setJSON([
                    'success'=>false,
                    'message'=>'Oops! Something went wrong. Please try again later.',
                ]);
            }


            
        }
        // $result = $this->model->about();
        return view('website/register');
    }
}
