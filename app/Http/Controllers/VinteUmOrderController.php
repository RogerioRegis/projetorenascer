<?php

namespace App\Http\Controllers;

use App\Models\Vinte_um_order;
use Illuminate\Http\Request;

class VinteUmOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vinte_um_orders = Vinte_um_order::all();
        return view('order2021.index', compact('vinte_um_orders'))
        ->with('reports', Vinte_um_order::orderBy('id', 'asc')->paginate(12));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order2021.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vinte_um_order::create($request->all());
        return redirect()->route('order2021.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Vinte_um_order::findOrFail($id);
        return view('order2021.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vinte_um_orders = Vinte_um_order::findOrFail($id);
        return view('order2021.edit', compact('vinte_um_orders'));
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
        $vinte_um_orders = Vinte_um_order::findOrFail($id);
        $vinte_um_orders->update($request->all());

        $request->validate(['report' => 'required|mimes:pdf,xlx,xlsx,csv|max:2048',]);
        $imagePhoto = $vinte_um_orders->report_month . '_2021' . '.' . $request->report->extension();
        $request->report->move(public_path('reports'), $imagePhoto);

        return back()
        ->with('success','Você carregou o arquivo com sucesso!');
        return view('order2021.index');
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
