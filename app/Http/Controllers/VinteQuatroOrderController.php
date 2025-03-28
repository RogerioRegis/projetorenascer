<?php

namespace App\Http\Controllers;

use App\Models\Vinte_quatro_order;
use Illuminate\Http\Request;

class VinteQuatroOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vinte_quatro_orders = Vinte_quatro_order::all();
        return view('order2024.index', compact('vinte_quatro_orders'))
        ->with('reports', Vinte_quatro_order::orderBy('id', 'asc')->paginate(12));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order2024.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vinte_quatro_order::create($request->all());
        return redirect()->route('order2024.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vinte_quatro_orders = Vinte_quatro_order::findOrFail($id);
        return view('order2024.show', compact('vinte_quatro_orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vinte_quatro_orders = Vinte_quatro_order::findOrFail($id);
        return view('order2024.edit', compact('vinte_quatro_orders'));
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
        $vinte_quatro_orders = Vinte_quatro_order::findOrFail($id);
        $vinte_quatro_orders->update($request->all());

        $request->validate(['report' => 'required|mimes:pdf,xlx,xlsx,csv|max:2048',]);
        $imagePhoto = $vinte_quatro_orders->report_month . '_2022' . '.' . $request->report->extension();
        $request->report->move(public_path('reports'), $imagePhoto);

        return back()
        ->with('success','Você carregou o arquivo com sucesso!');
        return view('order2024.index');
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
