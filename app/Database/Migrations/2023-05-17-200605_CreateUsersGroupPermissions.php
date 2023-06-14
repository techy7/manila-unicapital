<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateUsersGroupPermissions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'permission_id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'user_group_id' => [
                'type' => 'INT'
            ],
            'permission_name' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
        ]);
        $this->forge->addKey('permission_id', true);
        $this->forge->createTable('users_group_permissions');
    }

    public function down()
    {
        $this->forge->dropTable('users_group_permissions');
    }
}
