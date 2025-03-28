<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Year;
use App\Models\Relatorio;
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relatorios = Relatorio::all();
        return view('relatorio.index', compact('relatorios'))
        ->with('relatory', Relatorio::orderBy('id', 'desc')->paginate(1));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('relatorio.create')
        ->with('anos', Year::orderBy('id', 'desc')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Relatorio::create($request->all());
        //return view('order.index');
        return redirect()->route('relatorio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('relatorio.show', ['relatorio' => Relatorio::findOrFail($id)])
        ->with('orders', Order::orderBy('id', 'asc')->get())
        ->with('relatorios', Relatorio::orderBy('id', 'asc')->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relatorios = Relatorio::findOrFail($id);
        return view('relatorio.edit', compact('relatorios'));
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
        $relatorios = Relatorio::findOrFail($id);
        $relatorios->update($request->all());
        return redirect()->route('relatorio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
