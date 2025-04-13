<?php
namespace App\Controllers;
use App\Models\ScheduleModel;
use App\Models\CourseModel;
use App\Models\ClassroomModel;

class ScheduleController extends BaseController
{
    public function index()
    {
        $model = new ScheduleModel();
        $data['schedules'] = $model->findAll();
        return view('schedules/index', $data);
    }

    public function create()
    {
        $courseModel = new CourseModel();
        $classroomModel = new ClassroomModel();
        $data['courses'] = $courseModel->findAll();
        $data['classrooms'] = $classroomModel->findAll();
        return view('schedules/create', $data);
    }

    public function store()
    {
        $model = new ScheduleModel();
        $model->save($this->request->getPost());
        return redirect()->to('/schedules');
    }
}
