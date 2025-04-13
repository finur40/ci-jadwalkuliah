<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCourses extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => ['type' => 'INT', 'auto_increment' => true],
            'code'      => ['type' => 'VARCHAR', 'constraint' => 20],
            'title'     => ['type' => 'VARCHAR', 'constraint' => 100],
            'credit_hours'=> ['type' => 'INT'],
            'program_id'=> ['type' => 'INT'],
            ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->addForeignKey('program_id', 'programs', 'id')
        $this->forge->createTable('courses');
    }

    public function down()
    {
        //
    }
}
