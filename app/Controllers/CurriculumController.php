<?php

namespace App\Controllers;

use App\Models\CurriculumModel;

class CurriculumController extends BaseController

{
    public function create()
    {
        return view('form_curriculum');
    }
 
    public function store()
    {
        $curriculumModel = new CurriculumModel();

        // Verificar si los datos están llegando
        if ($this->request->getMethod() === 'post') {
            echo "Solicitud POST recibida"; 
            print_r($this->request->getPost());  
            exit;  
        }

        // Validar los datos
        $validated = $this->validate([
            'nombre_completo' =>     'required|min_length[3]',
            'correo' =>              'required|min_length[3]|valid_email',
            'telefono' =>            'required|min_length[8]|numeric',
            'direccion' =>           'required|min_length[3]',
            'fecha_nacimiento' =>    'required|valid_date',
            'titulo' =>              'required|min_length[3]',
            'experiencia' =>         'required|min_length[3]',
            'habilidades' =>         'required|min_length[3]',
            'educacion' =>           'required|min_length[3]',
            'idiomas' =>             'required|min_length[3]',
        ]);

        if (!$validated) {
            return view('form_curriculum', [
                'validation' => $this->validator
            ]);
        }

        // Guardar los datos
        $curriculumModel->save([
            'nombre_completo' => $this->request->getPost('nombre_completo'),
            'correo' => $this->request->getPost('correo'),
            'telefono' => $this->request->getPost('telefono'),
            'direccion' => $this->request->getPost('direccion'),
            'fecha_nacimiento' => $this->request->getPost('fecha_nacimiento'),
            'titulo' => $this->request->getPost('titulo'),
            'experiencia' => $this->request->getPost('experiencia'),
            'habilidades' => $this->request->getPost('habilidades'),
            'educacion' => $this->request->getPost('educacion'),
            'idiomas' => $this->request->getPost('idiomas'),
        ]);

        return redirect()->to('/curriculum/success');
    }

    public function success()
    {
        return view ('save_success');
    }

    public function index()
    {
        $curriculumModel = new CurriculumModel();
        $curriculums = $curriculumModel->findAll();
        
        return view('curriculum_list', ['curriculums' => $curriculums]);
    }
    
    public function show($id)
    {
        $curriculumModel = new CurriculumModel();
        $curriculum = $curriculumModel->find($id);
        
        return view('curriculum_show', ['curriculum' => $curriculum]);
    }
}