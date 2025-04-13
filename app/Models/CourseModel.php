<?php
namespace App\Models;
use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table = 'courses';
    protected $allowedFields = ['code', 'title', 'sks', 'program_id'];
    protected $useTimestamps = true;
}
