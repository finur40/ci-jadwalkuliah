<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateClassrooms extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => ['type' => 'INT', 'auto_increment' => true],
            'name'      => ['type' => 'VARCHAR', 'constraint' => 50],
            'capacity'  => ['type' => 'INT'],
            'type'      => ['type' => 'VARCHAR', 'constraint' => 20], // lecture or lab
            ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('classrooms');
    }

    public function down()
    {
        //
    }
}
