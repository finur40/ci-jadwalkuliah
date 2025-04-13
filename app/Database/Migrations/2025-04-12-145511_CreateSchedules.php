<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSchedules extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'auto_increment' => true],
            'course_id'     => ['type' => 'INT'],
            'instructor_id' => ['type' => 'INT'],
            'classroom_id'  => ['type' => 'INT'],
            'day'           => ['type' => 'VARCHAR', 'constraint' => 10],
            'start_time'    => ['type' => 'TIME'],
            'end_time'      => ['type' => 'TIME'],
            ]);
    $this->forge->addPrimaryKey('id', true);
    $this->forge->addForeignKey('course_id', 'courses', 'id');
    $this->forge->addForeignKey('classroom_id', 'classrooms', 'id');
    $this->forge->createTable('schedules');
    }

    public function down()
    {
        //
    }
}
