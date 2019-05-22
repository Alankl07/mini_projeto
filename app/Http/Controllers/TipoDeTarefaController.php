<?php

namespace App\Http\Controllers;

use App\Tipo_de_tarefa;
use Illuminate\Http\Request;

class TipoDeTarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo = Tipo_de_tarefa::all();
        return view('lista_tipo', compact('tipo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_de_tarefa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = new Tipo_de_tarefa();
        $tipo->Nome = $request->input('nome');
        $tipo->save();
        return redirect()->route('tipo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo_de_tarefa  $tipo_de_tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_de_tarefa $tipo_de_tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo_de_tarefa  $tipo_de_tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo_de_tarefa $tipo_de_tarefa)
    {
       return view('tipo_editar', compact('tipo_de_tarefa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo_de_tarefa  $tipo_de_tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_de_tarefa $tipo_de_tarefa)
    {
        $tipo_de_usuario->nome = $request->input('nome');
        $tipo_de_usuario->save();
        return redrect()->route('tipo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo_de_tarefa  $tipo_de_tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_de_tarefa $tipo_de_tarefa)
    {
        $tipo_de_tarefa->delete();
        return redirect()->route('tipo.index');
    }
}
