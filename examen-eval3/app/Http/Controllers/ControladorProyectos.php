<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;
use Date;


class ControladorProyectos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required'
        ]);

        $unixTimestamp = time();

        DB::table('proyecto')->insert([
            'titulo' => $request->get('titulo'),
            'url' => $request->get('url'),
            'descripcion' => $request->get('descripcion')
        ]);

        return $this->show();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $proyectos = DB::select("SELECT * FROM proyecto");
        return view('proyectos')->with('proyectos', $proyectos);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required'
        ]);

        DB::table('proyecto')->where('id', $request->get('id'))->update(['titulo' => $request->get('titulo')]);
        DB::table('proyecto')->where('id', $request->get('id'))->update(['descripcion' => $request->get('descripcion')]);
        DB::table('proyecto')->where('id', $request->get('id'))->update(['url' => $request->get('url')]);

        return $this->show();
    }

    public function annadirAlumnos(Request $request)
    {

        $request->validate([
            'nombre' => 'required',
            'dni' => 'required|numeric|min:9'
        ]);

        DB::table('alumnos')->insert([
            'nombre' => $request->get('nombre'),
            'dni' => $request->get('dni'),
            'proyecto_id' => $request->get('proyecto_id'),
        ]);

        return $this->modificar($request->get('proyecto_id'));
    }

    public function eliminarEstudiante($id)
    {
        DB::table('alumnos')->where('id', '=', $id)->delete();

        return $this->show();
    }

    public function modificar($id)
    {
        $proyecto = DB::select('select * from proyecto where id = ? ', [$id]);
        $alumnos = DB::select('select * from alumnos where proyecto_id = ? ', [$id]);
        return view("modificarproyecto")->with([
            'proyecto' => $proyecto,
            'alumnos' => $alumnos
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('proyecto')->where('id', '=', $id)->delete();

        return $this->show();
    }
}
