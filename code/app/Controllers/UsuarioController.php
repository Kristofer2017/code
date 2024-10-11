<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    public function index()
    {
        return view('usuario_form');
    }

    public function store()
    {
        $usuarioModel = new UsuarioModel();
    
        // Verificar si los datos están llegando
        if ($this->request->getMethod() === 'post') {
            echo "Solicitud POST recibida"; 
            print_r($this->request->getPost());  
            exit;
        }
    
        // Validar los datos
        $validated = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'email'    => 'required|valid_email',
            'telefono' => 'required|numeric|min_length[8]',
            'mensaje' =>  'required'
        ]);
    
        if (!$validated) {
            return view('usuario_form', [
                'validation' => $this->validator
            ]);
        }
    
        // Guardar los datos
        $usuarioModel->save([
            'nombre'   => $this->request->getPost('nombre'),
            'email'    => $this->request->getPost('email'),
            'telefono' => $this->request->getPost('telefono'),
            'mensaje' => $this->request->getPost('mensaje')
        ]);
    
        return redirect()->to('/usuario/success');
    }
    
    public function success()
    {
        return "Datos guardados con éxito!";
    }

    public function list()
    {
        $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->findAll(); // Obtener todos los registros de la tabla
        
        return view('usuario_list', ['usuarios' => $usuarios]);
    }
}