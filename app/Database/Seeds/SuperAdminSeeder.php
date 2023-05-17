<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'employee_id' => '0000',
            'name' => 'Super Admin',
            'email' => 'arwin.abatayo@techy7.com',
            'password' => password_hash('admin123', PASSWORD_BCRYPT),
        ];

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
