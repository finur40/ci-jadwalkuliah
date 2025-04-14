<?php
namespace App\Models;
use CodeIgniter\Model;

class ScheduleModel extends Model
{
    protected $table = 'schedules';
    protected $allowedFields = ['course_id', 'classroom_id', 'day', 'start_time', 'end_time'];
}
