<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'user_group_id' => [
                'type' => 'INT'
            ],
            'employee_id' => [
                'type' => 'VARCHAR',
                'constraint' => 8,
            ],
            'passcode' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            'status' => [
                'type' => 'BOOLEAN',
                'default' => true,
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('employee_id', 'employee_id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
