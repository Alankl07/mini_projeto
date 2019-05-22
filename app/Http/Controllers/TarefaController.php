<?php

namespace App\Http\Controllers;

use App\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefa = Tarefa::all();
        return view ('listar_tarefas', compact('tarefa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarefas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ta = new Tarefa();
        $ta->titulo = $request->input('titulo');
        $ta->usuario = $request->input('usuario');
        $ta->privacidade = $request->input('privacidade');
        $ta->status = $request->input('status');
        $ta->descricao = $request->input('descricao');
        $ta->tipo_de_tarefas = $request->input('tipo');
        $ta->Data_da_conclusão = $request->input('datepicker');
        $ta->save();
        return redirect()->route('tarefas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefa $tarefa)
    {
        return view('tarefa_editar', compact('tarefa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        $tarefa->titulo = $request->input('titulo');
        $tarefa->usuario = $request->input('usuario');
        $tarefa->privacidade = $request->input('privacidade');
        $tarefa->status = $request->input('status');
        $tarefa->descricao = $request->input('descricao');
        $tarefa->tipo_de_tarefas = $request->input('tipo');
        $tarefa->data_da_conclusão = $request->input('datepicker');
        $tarefa->save();
        return redirect()->route('tarefas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();
        return redirect()->route('tarefas.index');
    }
}
