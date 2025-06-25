<?php

namespace App\Controllers;
use App\Models\ProjectModel;

class Portfolio extends BaseController
{
    public function index()
    {
        $model = new ProjectModel();
        $data['projects'] = $model->findAll();
        return view('portfolio', $data);
    }

    public function view($slug)
    {
        $model = new ProjectModel();
        $project = $model->where('slug', $slug)->first();

        if (!$project) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Project not found");
        }

        return view('project_detail', ['project' => $project]);
    }
}
