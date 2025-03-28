<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Categories;
use App\Models\Reeducating;
use App\Models\Responsibles;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendas = Agenda::orderBy('id', 'DESC')->get();
        return view ('agenda.index', compact('agendas'))
        ->with('budgets', Agenda::orderBy('id', 'desc')->paginate(3));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('agenda.create')
        ->with('categorias', Categories::orderBy('nome', 'ASC')->get())
        ->with('reeducandos', Reeducating::orderBy('nome', 'ASC')->get())
        ->with('responsible', Responsibles::orderBy('id', 'ASC')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Agenda::create($request->all());
        return redirect()->route('agenda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Agenda::findOrFail($id);
        return view('agenda.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders = Agenda::findOrFail($id);
        return view('agenda.edit', compact('orders'))
        ->with('categorias', Categories::orderBy('nome', 'ASC')->get())
        ->with('reeducandos', Reeducating::orderBy('nome', 'ASC')->get())
        ->with('responsible', Responsibles::orderBy('nome', 'ASC')->get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $agendas = Agenda::findOrFail($id);
        $agendas->update($request->all());
        return redirect()->route('agenda.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agendas = Agenda::findOrFail($id);
        $agendas->update($request->all());
        return redirect()->route('agenda.index');
    }
}
