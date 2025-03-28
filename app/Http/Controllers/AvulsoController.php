<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Categories;
use App\Models\Reeducating;
use App\Models\Responsibles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AvulsoController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('order.show');
        return view('avulso.show', ['order' => Agenda::findOrFail($id)]);
    }

}
