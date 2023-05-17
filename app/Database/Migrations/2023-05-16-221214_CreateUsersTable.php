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
                'usigned' => true,
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'parent_id' => [
                'type' => 'INT'
            ],
            'employee_id' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            'password' => [
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
