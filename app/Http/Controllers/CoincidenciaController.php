<?php

namespace App\Http\Controllers;

use App\Models\Coincidencia;
use Illuminate\Http\Request;

/**
 * Class CoincidenciaController
 * @package App\Http\Controllers
 */
class CoincidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coincidencias = Coincidencia::paginate();

        return view('coincidencia.index', compact('coincidencias'))
            ->with('i', (request()->input('page', 1) - 1) * $coincidencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coincidencia = new Coincidencia();
        return view('coincidencia.create', compact('coincidencia'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  int $id1
     * @param  int $id2

     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Coincidencia::$rules);

        $coincidencia = Coincidencia::create($request->all());

        return redirect()->route('inicio')
            ->with('success', 'Usuario created successfully.');
    }

    public function store2($id1,$id2)
    {
        DB::insert('insert into coincidencias (usuarioId1, usuarioId2, match1) values ("10", "10", "1")');


        return redirect()->route('coincidencias.index')
            ->with('success', 'Coincidencia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coincidencia = Coincidencia::find($id);

        return view('coincidencia.show', compact('coincidencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coincidencia = Coincidencia::find($id);

        return view('coincidencia.edit', compact('coincidencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Coincidencia $coincidencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coincidencia $coincidencia)
    {
        request()->validate(Coincidencia::$rules);

        $coincidencia->update($request->all());

        return redirect()->route('coincidencias.index')
            ->with('success', 'Coincidencia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $coincidencia = Coincidencia::find($id)->delete();

        return redirect()->route('coincidencias.index')
            ->with('success', 'Coincidencia deleted successfully');
    }
}
