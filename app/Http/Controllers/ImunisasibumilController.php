<?php

namespace App\Http\Controllers;

use App\Models\Imunisasibumil;
use Illuminate\Http\Request;

class ImunisasibumilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posyandu = $request->posyandu ?? 'Posyandu Mawar';

        $imunisasiBumil = Imunisasibumil::where('status', 'sukses')
            ->where('posyandu', $posyandu)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('bumil.imunisasi.index', compact('imunisasiBumil'));
    }


    public function antri(Request $request)
    {

        $posyandu = $request->posyandu ?? 'Posyandu Mawar';

        $imunisasibumil = Imunisasibumil::where('status', 'antri')
            ->where('posyandu', $posyandu)
            ->get();

        return view('bumil.imunisasi.antri', compact('imunisasibumil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Imunisasibumil  $imunisasibumil
     * @return \Illuminate\Http\Response
     */
    public function show(Imunisasibumil $imunisasibumil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imunisasibumil  $imunisasibumil
     * @return \Illuminate\Http\Response
     */
    public function edit(Imunisasibumil $imunisasibumil)
    {
        return view('bumil.imunisasi.edit', compact('imunisasibumil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imunisasibumil  $imunisasibumil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imunisasibumil $imunisasibumil)
    {
        $data = $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
        ]);
        $data['status'] = 'sukses';



        Imunisasibumil::where('id', $imunisasibumil->id)
            ->update($data);

        return redirect('antri/bumil/imunisasi?posyandu=' . $request->posyandu . '');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imunisasibumil  $imunisasibumil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imunisasibumil $imunisasibumil)
    {
        Imunisasibumil::where('id', $imunisasibumil->id)
            ->delete();

        return redirect()->back()->with('message', 'berhasil menghapus data');
    }
}
