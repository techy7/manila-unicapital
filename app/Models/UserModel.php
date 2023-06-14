<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'user_group_id',
        'employee_id',
        'name',
        'email',
        'password',
        'status',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAllUsers()
    {
        $usersUserGroupTable = $this->builder();
        $usersUserGroupTable->select('*, users.name AS name, users_group.name AS user_group_name');
        $usersUserGroupTable->join('users_group', 'users.user_group_id = users_group.user_group_id', 'left');
        return $usersUserGroupTable->get()->getResult();
    }

    public function getUsers(string $userId)
    {
        return $this->find($userId);
    }

    public function getUserByEmployeeId(string $employeeId)
    {
        return $this->where('employee_id', $employeeId)->first();
    }

    public function updateUser(int $id, array $data)
    {
        return $this->update($id, $data);
    }
}
