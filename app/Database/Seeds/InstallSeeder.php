<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InstallSeeder extends Seeder
{
    public function run()
    {
        $this->call('AdminUsersGroup');
        $this->call('SuperAdmin');
    }
}
