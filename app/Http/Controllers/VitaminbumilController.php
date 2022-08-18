<?php

namespace App\Http\Controllers;

use App\Models\Vitaminbumil;
use Illuminate\Http\Request;

class VitaminbumilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posyandu = $request->posyandu ?? 'Posyandu Mawar';

        $vitaminBumil = Vitaminbumil::where('status', 'sukses')
            ->where('posyandu', $posyandu)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('bumil.vitamin.index', compact('vitaminBumil'));
    }

    public function antri(Request $request)
    {
        $posyandu = $request->posyandu ?? 'Posyandu Mawar';

        $vitaminBumil = Vitaminbumil::where('status', 'antri')
            ->where('posyandu', $posyandu)
            ->get();

        return view('bumil.vitamin.antri', compact('vitaminBumil'));
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
     * @param  \App\Models\Vitaminbumil  $vitaminbumil
     * @return \Illuminate\Http\Response
     */
    public function show(Vitaminbumil $vitaminbumil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vitaminbumil  $vitaminbumil
     * @return \Illuminate\Http\Response
     */
    public function edit(Vitaminbumil $vitaminbumil)
    {
        return view('bumil.vitamin.edit', compact('vitaminbumil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vitaminbumil  $vitaminbumil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vitaminbumil $vitaminbumil)
    {
        $data['status'] = 'sukses';

        $data['jenis'] = $request->jenis;

        Vitaminbumil::where('id', $vitaminbumil->id)
            ->update($data);

        return redirect('antri/bumil/vitamin?posyandu=' . $request->posyandu . '')->with('message', 'sukses melakukan pemberian vitamin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vitaminbumil  $vitaminbumil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vitaminbumil $vitaminbumil)
    {
        Vitaminbumil::where('id', $vitaminbumil->id)
            ->delete();

        return redirect()->back()->with('message', 'berhasil menghapus data');
    }
}
