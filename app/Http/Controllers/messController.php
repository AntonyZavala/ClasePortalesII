<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function __invoke(Request $request)
    {
    }*/

    /*public function store(Request $request)
    {
        //return request('nombre');
        return $request->get('nombre');
        return $request->get('email');
        return $request->get('subject');
        return $request->get('contenido');
    }*/

public function store()
{
    request()->validate([
        'fullname'=>'required',
        'email'=>'required',
        'subject'=>'required',
        'contenido'=>'required'
    ]);
}

//Antony Zavala




}
