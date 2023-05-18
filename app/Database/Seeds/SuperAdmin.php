<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SuperAdmin extends Seeder
{
    public function run()
    {
        $data = [
            'user_group_id' => 1,
            'employee_id' => '0000',
            'name' => 'Super Admin',
            'email' => 'arwin.abatayo@techy7.com',
            'password' => password_hash('admin123', PASSWORD_BCRYPT),
        ];

        $this->db->table('users')->insert($data);
    }
}
