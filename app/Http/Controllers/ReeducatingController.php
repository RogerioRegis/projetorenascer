<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Months;
use App\Models\Categories;
use App\Models\Reeducating;
use Illuminate\Http\Request;

class ReeducatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reeducandos = Reeducating::orderBy('nome', 'ASC')->get();
        return view ('reeducating.index', compact('reeducandos'))
        ->with('reeducating', Reeducating::orderBy('local', 'asc')->paginate(1));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('reeducating.create')
        ->with('categorias', Categories::orderBy('nome', 'ASC')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Reeducating::create($request->all());
        //$request->file('foto')->move(public_path('img/pp'));
        return redirect()->route('reeducating.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reeducandos = Reeducating::orderBy('nome', 'ASC')->get();
        return view('reeducating.show', ['reeducandos' => Reeducating::findOrFail($id)])
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
        $reeducandos = Reeducating::findOrFail($id);
        return view('reeducating.edit', compact('reeducandos'))
        ->with('categorias', Categories::orderBy('nome', 'ASC')->get())
        ->with('months', Months::orderBy('id', 'ASC')->get());
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
        $reeducandos = Reeducating::findOrFail($id);
        $reeducandos->update($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePhoto = 'perfil_' . $reeducandos->id . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imagePhoto);
   
        return back()
            ->with('success','Você atualizou a imagem com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reeducandos = Reeducating::findOrFail($id);
        $reeducandos->delete();
        return redirect()->route('reeducating.index');
    }
}
