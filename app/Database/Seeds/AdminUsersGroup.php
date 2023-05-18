<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminUsersGroup extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Administrators',
            'description' => 'Administrators group that manage all employees account credentials and permissions',
        ];

        $this->db->table('users_group')->insert($data);
    }
}
