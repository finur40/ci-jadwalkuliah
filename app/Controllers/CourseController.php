<?php
namespace App\Controllers;
use App\Models\CourseModel;
use App\Models\ProgramModel;

class CourseController extends BaseController
{
    public function index()
    {
        $model = new CourseModel();
        $data['courses'] = $model->findAll();
        return view('courses/index', $data);
    }

    public function create()
    {
        $programModel = new ProgramModel();
        $data['programs'] = $programModel->findAll();
        return view('coursescreate', $data);
    }

    public function store()
    {
        $model = new CourseModel();
        $model->save($this->request->getPost());
        return redirect()->to('/courses');
    }
}
