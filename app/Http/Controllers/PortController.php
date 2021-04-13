<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use DB;
use App\Models\Project;

class PortController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view ('Project.create');
    }
    public function store(Request $request)
    {
        Project::create([
            'title'=>request('title'),
            'description'=>request('description'),
        ]);


        return request();
    }
    public function index()
    {
       /*$portafolio=  [
            ['title'=> 'Proyecto #1'],
            ['title'=> 'Proyecto #2'],
            ['title'=> 'Proyecto #3'],
            ['title'=> 'Proyecto #4'],
        ];
        return view('portafolio', compact('portafolio'));
        /*return "Bienvenido a mi portafolio";*/

        //$portafolio= DB::table('project')->get();
        $Project= Project::orderby ('created_at', 'desc')-> get();
        return view('portafolio', compact('portafolio'));
    }

    /*public function show($id)
    {
        return view('Project.show', [
            'project'=> Project:: findorfail($id)
        ]);
    }*/

    public function show(Project $Project)
    {
        return view('Project.show', [
            'project'=> $Project
        ]);
    }

}
//Antony Zavala
