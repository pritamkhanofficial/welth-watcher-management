<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Website;
use App\Models\AuthModel;
use App\Models\OtpVerification;
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
                $email = \Config\Services::email();
                $email->setTo('pritamkhanofficial@gmail.com');
                $email->setFrom('support@techniglob.in');
                $email->setSubject('Welth Watcher Management Contact Info');
                $email->setMessage('Body of the email');

                // Send the email
                if ($email->send()) {
                    // echo 'Email sent successfully';
                } else {
                    // echo $email->printDebugger(); die;
                }
                return $this->response->setJSON([
                    'type'=>'success',
                    'title'=>'Success',
                    'message'=>'Thank You for Contacting Us!',
                ]);
            }else{
                return $this->response->setJSON([
                    'type'=>'error',
                    'title'=>'Error',
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
                    'type'=>'success',
                    'title'=>'Success',
                    'message'=>'Thank you for registering! Your information has been successfully submitted.',
                ]);
            }else{
                return $this->response->setJSON([
                    'type'=>'error',
                    'title'=>'Error',
                    'message'=>'Oops! Something went wrong. Please try again later.',
                ]);
            }


            
        }
        // $result = $this->model->about();
        return view('website/register');
    }

    public function registerUser(){
        $otpVerification = new OtpVerification();
        // getPrint($this->request->getVar());
        if($this->request->getVar('send_otp') == 'send_otp'){
            // getPrint($this->request->getVar());
            $email_data = $this->request->getVar('email');
            $full_name = $this->request->getVar('full_name');
            $otp = rand(100000,999999);
            $data = [
                'access_token' =>token(),
                'full_name' =>$full_name,
                'mobile' =>$this->request->getVar('mobile_no'),
                'email' =>$email_data,
                'otp_generate_on' =>\getCurrentDate(),
                'otp' =>$otp
            ];
            if($otpVerification->save($data)){
                $email = \Config\Services::email();
                $email->setTo($email_data);
                $email->setFrom('support@techniglob.in');
                $email->setSubject('One-Time Password (OTP) for Account Verification');
                $html  = "<!DOCTYPE html>
                            <html lang='en'>
                            <head>
                            <meta charset='UTF-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <title>One-Time Password (OTP) for Account Verification</title>
                            </head>
                            <body>
                            <p>Dear $full_name,</p>
                            
                            <p>We hope this message finds you well.</p>
                            
                            <p>As per your request, we have generated a (OTP) for the purpose of completing the verification process for your account. Please find your OTP below:</p>
                            
                            <p style='text-align: center; font-size: 24px; font-weight: bold;'><strong>OTP:</strong> <span style='color: #0073e6;'>$otp</span> </p>
                            
                            <p>Kindly use this OTP to complete the verification process for your account. Please ensure that you enter the OTP accurately and promptly to avoid any inconvenience.</p>
                            
                            <p>If you have any questions or require further assistance, please feel free to reach out to us. We are here to help.</p>
                            
                            <p>Thank you for choosing our services.</p>
                            
                            <p>Best regards,<br>
                            [Welth Watcher Management]<br>
                            </p>
                            </body>
                            </html>";
                $email->setMessage($html);

                // Send the email
                if ($email->send()) {
                    // echo 'Email sent successfully';
                } else {
                    // echo $email->printDebugger(); die;
                }
                return $this->response->setJSON([
                    'type'=>'success',
                    'title'=>'Success',
                    'message'=>'Your OTP has been successfully sent. Please check your '. $email_data .' for the verification code. Thank you for choosing us.',
                ]);
            }else{
                return $this->response->setJSON([
                    'type'=>'error',
                    'title'=>'Error',
                    'message'=>'!Oops something went wrong. Please try again.',
                ]);
            }
            

        }
        if($this->request->getVar('submit_otp') == 'submit_otp'){
            $otp = $this->request->getVar('otp');
            $verify_otp = $otpVerification->where(['otp'=>$otp])->first();
            if(empty($verify_otp)){
                return $this->response->setJSON([
                    'type'=>'error',
                    'title'=>'Error',
                    'message'=>'Invalid OTP',
                ]);
            }
            $data = [
                'full_name' =>$verify_otp['full_name'],
                'username' =>rand(1000,9999) . date('dmY'),
                'email' =>$verify_otp['email'],
                'password' =>getHash($this->request->getVar('password')),
                'mobile' =>$verify_otp['mobile'],
                'created_at' =>\getCurrentDate(),
            ];
            $result = $this->model->submitRegister($data);
            if($result){
                return $this->response->setJSON([
                    'type'=>'success',
                    'title'=>'Success',
                    'message'=>'Registration successful! You can now log in.',
                ]);
            }else{
                return $this->response->setJSON([
                    'type'=>'error',
                    'title'=>'Error',
                    'message'=>'!Oops something went wrong. Please try again.',
                ]);
            }

        }
    }

    public function checkEmail(){
        $model = new AuthModel();
        $email = $this->request->getVar('email');
        $verify_email = $model->where(['email'=>$email,'user_type'=>'FRONT'])->first();
        if(empty($verify_email)) { 
            echo json_encode('true', JSON_HEX_QUOT | JSON_HEX_TAG);
            exit();
        } else {
            echo json_encode('This email already exist', JSON_HEX_QUOT | JSON_HEX_TAG);
            exit();
        }
    }
    public function checkMobile(){
        $model = new AuthModel();
        $mobile = $this->request->getVar('mobile_no');
        $verify_mobile_no = $model->where(['mobile'=>$mobile,'user_type'=>'FRONT'])->first();
        if(empty($verify_mobile_no)) { 
            echo json_encode('true', JSON_HEX_QUOT | JSON_HEX_TAG);
            exit();
        } else {
            echo json_encode('This mobile no already exist', JSON_HEX_QUOT | JSON_HEX_TAG);
            exit();
        }
    }

    public function login()
    {
        $authModel = new AuthModel();
        // getPrint($this->request->getVar());
        if($this->request->getVar('login') == 'login'){
            // getPrint($this->request->getVar());
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $data = $authModel->Auth($username);

            if(!is_null($data)){
                $pass = $data->password;
                $authenticatePassword = password_verify($password, $pass);
                if($authenticatePassword){
                    $session = session();
                    $session_data = [
                        'user_front' => $data,
                        'isFrontLoggedIn' => TRUE
                    ];
                    $session->set($session_data);
                    return $this->response->setJSON([
                        'type'=>'success',
                        'title'=>'Success',
                        'message'=>'Login Successfully',
                    ]);
                }else{
                    return $this->response->setJSON([
                        'type'=>'error',
                        'title'=>'Error',
                        'message'=>'Password is incorrect.',
                    ]);
                }
            }else{
                return $this->response->setJSON([
                    'type'=>'error',
                    'title'=>'Error',
                    'message'=>'Email or Username does not exist.',
                ]);
            }
        }
        $result = $this->model->home();
        return view('website/home', ['data' => $result]);
    }

    public function report()
    {
        return view('website/report');
    }

    public function logout()
    {
        session()->remove('isFrontLoggedIn');
        session()->remove('user_front');
        return redirect()
                ->to('/');
    }

    
}
