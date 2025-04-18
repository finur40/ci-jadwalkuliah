<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePrograms extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => ['type' => 'INT', 'auto_increment' => true],
            'name'      => ['type' => 'VARCHAR', 'constraint' => 100],
            'department'=> ['type' => 'VARCHAR', 'constraint' => 100],
            'academic_level'  => ['type' => 'VARCHAR', 'constraint' =>10],
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('programs');
    }

    public function down()
    {
        //
    }
}
