<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Categories;
use App\Models\Reeducating;
use Illuminate\Http\Request;

class PixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagamentos = Order::orderBy('id', 'desc')->get();
        return view ('pix.index', compact('pagamentos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pix.show', ['pagamentos' => Reeducating::findOrFail($id)])
        ->with('orders', Order::orderBy('id')->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders = Order::findOrFail($id);
        return view('order.edit', compact('orders'))
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
        $orders = Order::findOrFail($id);
        $orders->update($request->all());
        return redirect()->route('pix.index');
    }
}
