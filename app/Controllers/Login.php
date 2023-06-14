<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
        // Destroy session
        $this->session->destroy();
        helper(['form']);
        return view('login');
    }

    public function loginAuth()
    {
        $employee_id = $this->request->getPost('employee_id');
        $passcode = $this->request->getPost('passcode');
        
        $user_data = model('UserModel')->where('employee_id', $employee_id)->first();

        if (isset($user_data) && $user_data->status) {
            $authenticatePasscode = password_verify($passcode, $user_data->passcode);
            if ($authenticatePasscode) {
                // Set log activity
                $this->activity->log(
                    $user_data,
                    sprintf('User Logged In Employee ID: %s', $user_data->employee_id),
                    $user_data,
                    array(
                        'ip_address' => $this->request->getIPAddress(),
                        'user_agent' => $this->request->getUserAgent()->getAgentString(),
                        'is_https' => $this->request->isSecure(),
                        'is_ajax' => $this->request->isAJAX(),
                        'is_cli' => $this->request->isCLI(),
                    ),
                    'user_logged_in'
                );

                // Set session
                $this->session->set([
                    'user_id' => $user_data->id,
                    'employee_id' => $user_data->employee_id,
                    'isLoggedIn' => true
                ]);

                // Then redirect
                return redirect()->to('/dashboard');
            }
            else {
                $this->session->setFlashdata('login_error_message', $this->login_lang['errorMessage']['forPasscode']);
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
        // Set log activity
        $this->activity->log(
            $this->admin_user_data,
            sprintf('User Logged Out Employee ID: %s', $this->admin_user_data->employee_id),
            $this->admin_user_data,
            array(
                'ip_address' => $this->request->getIPAddress(),
                'user_agent' => $this->request->getUserAgent()->getAgentString(),
                'is_https' => $this->request->isSecure(),
                'is_ajax' => $this->request->isAJAX(),
                'is_cli' => $this->request->isCLI(),
            ),
            'user_logged_out'
        );

        // Destroy session
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
