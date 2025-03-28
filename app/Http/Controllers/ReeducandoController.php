<?php

namespace App\Http\Controllers;

use App\Models\Months;
use App\Models\Categories;
use App\Models\Reeducating;
use Illuminate\Http\Request;

class ReeducandoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reeducandos = Reeducating::orderBy('nome', 'ASC')->get();
        return view ('reeducandos.index', compact('reeducandos'))
        ->with('reeducating', Reeducating::orderBy('id', 'desc')->paginate(1));
    }

    public function create()
    {
        return view ('reeducandos.create')
        ->with('categorias', Categories::orderBy('nome', 'ASC')->get());
    }
    
    public function store(Request $request)
    {
        Reeducating::create($request->all());
        return redirect()->route('reeducandos.index')
        ->with('success','NOVO CADASTRO REALIZADO COM SUCESSO!');
    }

    public function show($id)
    {
        $reeducandos = Reeducating::orderBy('nome', 'ASC')->get();
        return view('reeducandos.show', ['reeducandos' => Reeducating::findOrFail($id)])
        ->with('months', Months::orderBy('id')->get());
    }

    public function edit($id)
    {
        $reeducandos = Reeducating::findOrFail($id);
        return view('reeducandos.edit', compact('reeducandos'))
        ->with('categorias', Categories::orderBy('nome', 'ASC')->get())
        ->with('months', Months::orderBy('id', 'ASC')->get());
    }

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
            ->with('success','Você atualizou a iamgem com sucesso!');
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
