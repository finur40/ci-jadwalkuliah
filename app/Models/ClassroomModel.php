<?php
namespace App\Models;
use CodeIgniter\Model;

class ClassroomModel extends Model
{
    protected $table = 'classrooms';
    protected $allowedFields = ['name', 'capacity', 'type'];
}
