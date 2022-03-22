<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class ExpedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedientes = Expediente::all();
        return Inertia::render('Expedientes/Mostrar', ['expedientes' => $expedientes]);

        /* return Inertia::render('Expedientes/Mostrar', [
            'expedientes' => Expediente::all()->map(function ($expediente) {
                return [
                    'id' => $expediente->id,
                    'numero' => $expediente->numero,
                    'letra' => $expediente->letra,
                    'anio' => $expediente->anio,
                    'objeto' => $expediente->objeto,
                    'extracto' => $expediente->extracto,
                    'status' => $expediente->status,
                    'edit_url' => URL::route('expedientes.edit', $expediente),
                ];
            }),
            'create_url' => URL::route('expedientes.create'),
        ]); */
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Expedientes/FormCrear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'numero' => 'required',
                'letra' => 'required',
                'anio' => 'required',
                'objeto' => 'required'
            ]
        );
        Expediente::create($request->all());
        return  Redirect::route('expedientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function show(Expediente $expediente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function edit(Expediente $expediente)
    {
        return Inertia::render('Expedientes/EditForm', ['expediente' => $expediente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expediente $expediente)
    {
        $expediente->update($request->all());
        return Redirect::route('expedientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expediente $expediente)
    {
        $expediente->delete();
        return Redirect::route('expedientes.index');
    }
}
