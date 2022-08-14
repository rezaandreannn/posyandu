<?php

namespace App\Http\Controllers;

use App\Models\Imunisasibalita;
use Illuminate\Http\Request;

class ImunisasibalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imunisasiBalita = Imunisasibalita::where('status', 'sukses')
            ->get();

        return view('imunisasi.index', compact('imunisasiBalita'));
    }

    public function antri()
    {
        $imunisasiBalita = Imunisasibalita::where('status', 'antri')
            ->get();

        return view('imunisasi.antri', compact('imunisasiBalita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('frond.imunisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imunisasibalita  $imunisasibalita
     * @return \Illuminate\Http\Response
     */
    public function show(Imunisasibalita $imunisasibalita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imunisasibalita  $imunisasibalita
     * @return \Illuminate\Http\Response
     */
    public function edit(Imunisasibalita $imunisasibalita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imunisasibalita  $imunisasibalita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imunisasibalita $imunisasibalita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imunisasibalita  $imunisasibalita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imunisasibalita $imunisasibalita)
    {
        //
    }
}
