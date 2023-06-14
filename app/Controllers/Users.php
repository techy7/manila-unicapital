<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = model('UserModel');
    }

    public function index()
    {
        $this->view_data['users'] = $this->userModel->getAllUsers();
        return view('users/list', $this->view_data);
    }

    public function viewUser(string $employeeId)
    {
        $this->view_data['user_data'] = $this->userModel->getUserByEmployeeId($employeeId);
        return view('users/view', $this->view_data);
    }

    public function addUser()
    {
        helper(['form']);
        return view('users/add', $this->view_data);
    }

    public function editUser(int $userId)
    {
        helper(['form']);
        $this->view_data['user_data'] = $this->userModel->getUsers($userId);
        return view('users/edit', $this->view_data);
    }

    public function updateUser()
    {
        $post_data = [
            'employee_id' => $this->request->getPost('employee_id'),
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'status' => ($this->request->getPost('status') ? 1 : 0),
        ];
        $this->userModel->updateUser($this->request->getPost('id'), $post_data);
        return redirect()->to('/users/' . $this->request->getPost('employee_id'));
    }
}
