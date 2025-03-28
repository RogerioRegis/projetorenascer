<?php

namespace App\Http\Controllers;

use App\Models\Vinte_tres_order;
use Illuminate\Http\Request;

class VinteTresOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vinte_tres_orders = Vinte_tres_order::all();
        return view('order2023.index', compact('vinte_tres_orders'))
        ->with('reports', Vinte_tres_order::orderBy('id', 'asc')->paginate(12));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order2023.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vinte_tres_order::create($request->all());
        return redirect()->route('order2023.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Vinte_tres_order::findOrFail($id);
        return view('order2023.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vinte_tres_orders = Vinte_tres_order::findOrFail($id);
        return view('order2023.edit', compact('vinte_tres_orders'));
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
        $vinte_tres_orders = Vinte_tres_order::findOrFail($id);
        $vinte_tres_orders->update($request->all());

        $request->validate(['report' => 'required|mimes:pdf,xlx,xlsx,csv|max:2048',]);
        $imagePhoto = $vinte_tres_orders->report_month . '_2022' . '.' . $request->report->extension();
        $request->report->move(public_path('reports'), $imagePhoto);

        return back()
        ->with('success','Você carregou o arquivo com sucesso!');
        return view('order2023.index');
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
