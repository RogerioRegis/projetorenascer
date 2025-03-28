<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Categories;
use App\Models\Reeducating;
use Illuminate\Http\Request;

class ValidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('valida.index');
        //$reeducandos = Reeducating::orderBy('nome', 'ASC')->get();
        //return view ('valida.index', compact('reeducandos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$reeducandos = Reeducating::orderBy('nome', 'ASC')->get();
        return view('valida.show', ['reeducando' => Reeducating::findOrFail($id)]);

    }
}
