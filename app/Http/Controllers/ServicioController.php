<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth')->except('index');
    }


    public function index()
    {
        $servicios = Servicio::with('User')->get();
        //$servicios = Servicio::all();
        // $user = Auth::user();
        // $servicios = $user->servicios;
        //$servicios = Auth::user()->servicios;
        return view('servicios.servicioIndex', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.servicioCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'plataforma' => 'required',
            'juego' => 'required',
            'precio' => 'required',
            'descripcion' => 'required|max:255'
        ]);

        $request->merge(['user_id' => Auth::id()]);
        Servicio::create($request->all());
        return redirect('/servicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        return view('servicios.servicioShow', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        $this->authorize('update', $servicio);
        //Gate::authorize('edita-servicio',$servicio);
        return view('servicios.servicioEdit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        $request->validate([
            'plataforma' => 'required',
            'juego' => 'required',
            'precio' => 'required',
            'descripcion' => 'required|max:255'
        ]);

        $servicio->plataforma = $request->plataforma;
        $servicio->juego = $request->juego;
        $servicio->precio = $request->precio;
        $servicio->descripcion = $request->descripcion;
        $servicio->save();
        return redirect('/servicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        $this->authorize('delete', $servicio);
        $servicio->delete();
        return redirect('/servicios');
    }

}
