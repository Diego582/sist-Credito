<?php

namespace App\Http\Controllers;

use App\Models\Credito;
use App\Models\Expediente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class CreditoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedientes = Expediente::all();
        $creditos = Credito::all();
        return Inertia::render('Creditos/Mostrar', ['creditos' => $creditos, 'expedientes' => $expedientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expedientes = Expediente::all();
        return Inertia::render('Creditos/FormCrear', ['expedientes' => $expedientes]);
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
                'linea' => 'required',
                'monto' => 'required',
                'detalle' => 'required',
                'fecha_entrega' => 'required'

            ]
        );
        Credito::create($request->all());
        return Redirect::route('creditos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Credito  $credito
     * @return \Illuminate\Http\Response
     */
    public function show(Credito $credito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Credito  $credito
     * @return \Illuminate\Http\Response
     */
    public function edit(Credito $credito)
    {
        $expedientes = Expediente::all();
        return Inertia::render('Creditos/EditForm', ['credito' => $credito, 'expedientes' => $expedientes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Credito  $credito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credito $credito)
    {
        $credito->update($request->all());
        return Redirect::route('creditos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Credito  $credito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credito $credito)
    {
        $credito->delete();
        return Redirect::route('creditos.index');
    }
}
