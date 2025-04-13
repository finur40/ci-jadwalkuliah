<?php
namespace App\Controllers;
use App\Models\ProgramModel;

class ProgramController extends BaseController
{
    public function index()
    {
        $model = new ProgramModel();
        $data['programs'] = $model->findAll();
        return view('programs/index', $data);
    }

    public function create()
    {
        return view('programscreate');
    }

    public function store()
    {
        $model = new ProgramModel();
        $model->save($this->request->getPost());
        return redirect()->to('/programs');
    }
}
