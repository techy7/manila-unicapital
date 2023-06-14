<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Profile extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = model('UserModel');
    }

    public function index()
    {
        $this->view_data['user_data'] = $this->userModel->getUsers($this->session->user_id);
        return view('profile/view', $this->view_data);
    }

    public function edit()
    {
        helper(['form']);
        $this->view_data['user_data'] = $this->userModel->getUsers($this->session->user_id);
        return view('profile/edit', $this->view_data);
    }

    public function update()
    {
        $post_data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ];
        $this->userModel->updateUser($this->session->user_id, $post_data);
        return redirect()->to('/profile');
    }

    public function activity()
    {
        $this->view_data['user_activities'] = $this->activity->getSubjectActivities($this->session->user_id);

        //dd($this->view_data['user_activities']);
        return view('profile/activity', $this->view_data);
    }
}
