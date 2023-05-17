<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    private $lang;

    public function __construct()
    {
        $locale = service('request')->getLocale();
        $this->lang = include(APPPATH . '/Language/' . $locale . '/Login.php');
    }

    public function index()
    {
        session();
        session_destroy();
        
        helper(['form']);
        echo view('login');
    }

    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $employee_id = $this->request->getVar('employee_id');
        $password = $this->request->getVar('password');
        
        $user_data = $userModel->where('employee_id', $employee_id)->first();
        
        if ($user_data && $user_data['status']) {
            $authenticatePassword = password_verify($password, $user_data['password']);
            if ($authenticatePassword) {
                $session->set([
                    'user_id' => $user_data['id'],
                    'employee_id' => $user_data['employee_id'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/dashboard');
            }
            else {
                $session->setFlashdata('login_error_message', $this->lang['errorMessage']['forPassword']);
                return redirect()->to('/login');
            }
        }
        else {
            $session->setFlashdata('login_error_message', $this->lang['errorMessage']['forEmployeeId']);
            return redirect()->to('/login');
        }
    }

    public function logoutAuth()
    {
        session();
        session_destroy();
        return redirect()->to('/');
    }
}
