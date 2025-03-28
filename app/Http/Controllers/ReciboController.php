<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Categories;
use App\Models\Reeducating;
use App\Models\Responsibles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReciboController extends Controller
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
        return view('recibo.show', ['order' => Order::findOrFail($id)]);
    }

}
