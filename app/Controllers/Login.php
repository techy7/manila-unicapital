<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    private $login_lang;

    public function __construct()
    {
        $locale = service('request')->getLocale();
        $this->login_lang = include(APPPATH . '/Language/' . $locale . '/Login.php');
    }

    public function index()
    {
        $this->session->destroy();
        helper(['form']);
        return view('login');
    }

    public function loginAuth()
    {
        $userModel = new UserModel();
        $employee_id = $this->request->getPost('employee_id');
        $password = $this->request->getPost('password');
        
        $user_data = $userModel->where('employee_id', $employee_id)->first();
        
        if ($user_data && $user_data['status']) {
            $authenticatePassword = password_verify($password, $user_data['password']);
            if ($authenticatePassword) {
                $this->session->set([
                    'user_id' => $user_data['id'],
                    'employee_id' => $user_data['employee_id'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/dashboard');
            }
            else {
                $this->session->setFlashdata('login_error_message', $this->login_lang['errorMessage']['forPassword']);
                return redirect()->to('/login');
            }
        }
        else {
            $this->session->setFlashdata('login_error_message', $this->login_lang['errorMessage']['forEmployeeId']);
            return redirect()->to('/login');
        }
    }

    public function logoutAuth()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }

    public function checkAuth()
    {
        if ($this->session->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }
        else {
            return redirect()->to('/login');
        }
    }
}
