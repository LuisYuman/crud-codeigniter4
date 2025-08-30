<?php

namespace App\Controllers;

use App\Models\CursoModel;
use CodeIgniter\Controller;

class CursoController extends Controller
{
    protected $cursoModel;

    public function __construct()
    {
        $this->cursoModel = new CursoModel();
    }

    public function index()
    {
        $data['cursos'] = $this->cursoModel->findAll();
        $data['titulo'] = "Listado de cursos";
        return view('cursos/index', $data);
    }

}

?>