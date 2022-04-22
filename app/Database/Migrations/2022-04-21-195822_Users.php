<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'unique' => TRUE
            ],

            'web_url' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            'profile_pics' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'mobile' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],

            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],

            'role' => [
                'type' => 'ENUM',
                'constraint' => array('super_admin','admin','member', 'support', 'team', 'reviewer'),
            ],


        ]);
        $this->forge->createTable('users');
    }

    public function down()
    {
        //
    }
}
