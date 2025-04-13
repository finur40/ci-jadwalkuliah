<?php
namespace App\Controllers;
use App\Models\ClassroomModel;

class ClassroomController extends BaseController
{
    public function index()
    {
        $model = new ClassroomModel();
        $data['classrooms'] = $model->findAll();
        return view('classrooms/index', $data);
    }

    public function create()
    {
        return view('classrooms/create');
    }

    public function store()
    {
        $model = new ClassroomModel();
        $model->save($this->request->getPost());
        return redirect()->to('/classrooms');
    }
}
