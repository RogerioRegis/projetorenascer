<?php

namespace App\Http\Controllers;

use App\Models\Vinte_dois_order;
use Illuminate\Http\Request;

class VinteDoisOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vinte_dois_orders = Vinte_dois_order::all();
        return view('order2022.index', compact('vinte_dois_orders'))
        ->with('reports', Vinte_dois_order::orderBy('id', 'asc')->paginate(12));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order2022.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vinte_dois_order::create($request->all());
        return redirect()->route('order2022.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Vinte_dois_order::findOrFail($id);
        return view('order2022.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vinte_dois_orders = Vinte_dois_order::findOrFail($id);
        return view('order2022.edit', compact('vinte_dois_orders'));
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
        $vinte_dois_orders = Vinte_dois_order::findOrFail($id);
        $vinte_dois_orders->update($request->all());

        $request->validate(['report' => 'required|mimes:pdf,xlx,xlsx,csv|max:2048',]);
        $imagePhoto = $vinte_dois_orders->report_month . '_2022' . '.' . $request->report->extension();
        $request->report->move(public_path('reports'), $imagePhoto);

        return back()
        ->with('success','Você carregou o arquivo com sucesso!');
        return view('order2022.index');
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
