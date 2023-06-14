<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SuperAdmin extends Seeder
{
    public function run()
    {
        $data = [
            'user_group_id' => 1,
            'employee_id' => '12345678',
            'name' => 'Super Admin',
            'email' => 'arwin.abatayo@techy7.com',
            'passcode' => password_hash('123456', PASSWORD_BCRYPT),
        ];

        $this->db->table('users')->insert($data);
    }
}
