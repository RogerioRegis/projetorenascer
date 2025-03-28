<?php

namespace App\Http\Controllers;

use App\Models\Months;
use App\Models\Reeducating;
use Illuminate\Http\Request;

class MonthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $months = Months::orderBy('id', 'asc')->get();
        return view('month.index', compact('months'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('month.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Months::create($request->all());
        return redirect()->route('month.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('month.show', ['month' => Months::findOrFail($id)])
        ->with('reeducating', Reeducating::orderBy('id')->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $months = Months::findOrFail($id);
        return view('month.edit', compact('months'))
        ->with('reeducandos', Reeducating::orderBy('nome', 'ASC')->get());
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
        $months = Months::findOrFail($id);
        $months->update($request->all());
        return back()->with('success','VOCÊ ATUALIZOU O MÊS COM SUCESSO!');
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
