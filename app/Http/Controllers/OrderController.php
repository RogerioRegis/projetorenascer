<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Categories;
use App\Models\Reeducating;
use App\Models\Responsibles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->get();
        return view('order.index', compact('orders'))
        ->with('service', Order::orderBy('id', 'desc')->paginate(8));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create')
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
        Order::create($request->all());
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('order.show', ['order' => Order::findOrFail($id)])
        ->with('responsible', Responsibles::orderBy('id')->get());
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
        return redirect()->route('order.index');
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

    public function print()
    {
        return view('order.print');
    }
}
