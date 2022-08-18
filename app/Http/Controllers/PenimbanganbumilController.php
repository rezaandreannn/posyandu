<?php

namespace App\Http\Controllers;

use App\Models\Penimbanganbumil;
use Illuminate\Http\Request;

class PenimbanganbumilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posyandu = $request->posyandu ?? 'Posyandu Mawar';

        $penimbanganBumil = Penimbanganbumil::where('status', 'sukses')
            ->where('posyandu', $posyandu)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('bumil.penimbangan.index', compact('penimbanganBumil'));
    }

    public function antri(Request $request)
    {
        $posyandu = $request->posyandu ?? 'Posyandu Mawar';

        $penimbanganBumil = Penimbanganbumil::where('status', 'antri')
            ->where('posyandu', $posyandu)
            ->get();

        return view('bumil.penimbangan.antri', compact('penimbanganBumil'));
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
     * @param  \App\Models\Penimbanganbumil  $penimbanganbumil
     * @return \Illuminate\Http\Response
     */
    public function show(Penimbanganbumil $penimbanganbumil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penimbanganbumil  $penimbanganbumil
     * @return \Illuminate\Http\Response
     */
    public function edit(Penimbanganbumil $penimbanganbumil)
    {
        return view('bumil.penimbangan.edit', compact('penimbanganbumil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penimbanganbumil  $penimbanganbumil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penimbanganbumil $penimbanganbumil)
    {
        $data = $request->validate([
            'berat_badan' => 'required',
        ]);

        $data['status'] = 'sukses';

        Penimbanganbumil::where('id', $penimbanganbumil->id)
            ->update($data);

        return redirect('antri/bumil/penimbangan?posyandu=' . $request->posyandu . '')->with('message', 'sukses melakukan penimbangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penimbanganbumil  $penimbanganbumil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penimbanganbumil $penimbanganbumil)
    {
        Penimbanganbumil::where('id', $penimbanganbumil->id)
            ->delete();

        return redirect()->back()->with('message', 'Berhasil menghapus data');
    }
}
