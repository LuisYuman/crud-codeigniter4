<?php

namespace App\Controllers;

use App\Models\AlumnoModel;
use App\Models\DetalleAlumnoCursoModel;
use App\Models\CursoModel;
use CodeIgniter\Controller;

class AlumnoController extends Controller
{
    protected $alumnoModel;

    public function __construct()
    {
        $this->alumnoModel = new AlumnoModel();
    }

    public function index()
    {
        $data['alumnos'] = $this->alumnoModel->findAll();
        return view('alumnos/index', $data);
    }

    public function create()
    {
        return view('alumnos/create');
    }

    public function store()
    {
        $datos = [
            'nombre'         => $this->request->getPost('nombre'),
            'apellido'       => $this->request->getPost('apellido'),
            'direccion'      => $this->request->getPost('direccion'),
            'movil'          => $this->request->getPost('movil'),
            'email'          => $this->request->getPost('email'),
            'fecha_creacion' => date('Y-m-d H:i:s'),
            'user'           => 'admin', 
            'inactivo'       => 0,
        ];
        $this->alumnoModel->save($datos);

        return redirect()->to('/alumnos');
    }

    public function edit($id)
    {
        $data['alumno'] = $this->alumnoModel->find($id);
        return view('alumnos/edit', $data);
    }

    public function update($id)
    {
        $this->alumnoModel->update($id, [
            'nombre'    => $this->request->getPost('nombre'),
            'apellido'  => $this->request->getPost('apellido'),
            'direccion' => $this->request->getPost('direccion'),
            'movil'     => $this->request->getPost('movil'),
            'email'     => $this->request->getPost('email'),
            'user'      => 'admin', 
            'inactivo'  => $this->request->getPost('inactivo') ?? 0,
        ]);

        return redirect()->to('/alumnos');
    }

    public function delete($id)
    {
        $this->alumnoModel->delete($id);
        return redirect()->to('/alumnos');
    }

    public function asignarCursos($alumno_id)
    {
        $detalleModel = new DetalleAlumnoCursoModel();
        $cursoModel = new CursoModel();

        $cursos = $cursoModel->findAll();
        $asignados = $detalleModel->where('alumno_id', $alumno_id)->findColumn('curso_id') ?? [];

        return view('alumnos/asignar_cursos', [
            'alumno_id' => $alumno_id,
            'cursos' => $cursos,
            'asignados' => $asignados
        ]);
    }

    public function guardarAsignacionCursos()
    {
        $alumno_id = $this->request->getPost('alumno_id');
        $cursos = $this->request->getPost('cursos') ?? [];

        $detalleModel = new DetalleAlumnoCursoModel();

        // Elimina asignaciones previas
        $detalleModel->where('alumno_id', $alumno_id)->delete();

        // Inserta nuevas asignaciones
        foreach ($cursos as $curso_id) {
            $detalleModel->insert([
                'alumno_id' => $alumno_id,
                'curso_id' => $curso_id
            ]);
        }

        return redirect()->to('alumnos');
    }
}
