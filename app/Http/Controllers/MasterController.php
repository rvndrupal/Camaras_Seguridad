<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Master;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function master(){
        $masters=Master::all();
        //dd($masters);

        return view('front.home', compact('masters')); 
    }


    public function index()
    { 
        $masters=Master::all();
        return view('admin.masters.index',compact('masters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.masters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $master=Master::create($request->all());

        if($request->file('banner')){ //si se manda el archivo
            $path=Storage::disk('public')->put('image', $request->file('banner'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $master->fill(['banner' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }
        
        return redirect()->route('masters.index')
        ->with('info','Dato guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function show(Master $master)
    {
        return view('admin.masters.show', compact('master'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit(Master $master)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Master $master)
    {
        $master=Master::find(1);
        $master->titulo=$request->titulo;
        $master->nosotros=$request->nosotros;
        $master->noso_titulo=$request->noso_titulo;
        $master->noso_descri=$request->noso_descri;

        if($request->file('banner')){ //si se manda el archivo
            $path=Storage::disk('public')->put('image', $request->file('banner'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $master->fill(['banner' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }

        $master->save();
            
        
        return response()->json($master);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master $master)
    {
        $master->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
