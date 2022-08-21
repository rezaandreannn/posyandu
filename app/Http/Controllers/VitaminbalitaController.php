<?php

namespace App\Http\Controllers;

use App\Models\Vitaminbalita;
use Illuminate\Http\Request;

class VitaminbalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posyandu = $request->posyandu ?? 'Posyandu Mawar';

        $vitaminBalita = Vitaminbalita::where('status', 'sukses')
            ->where('posyandu', $posyandu)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('balita.vitamin.index', compact('vitaminBalita'));
    }

    public function antri(Request $request)
    {
        $posyandu = $request->posyandu ?? 'Posyandu Mawar';

        $vitaminBalita = Vitaminbalita::where('status', 'antri')
            ->where('posyandu', $posyandu)
            ->get();

        return view('balita.vitamin.antri', compact('vitaminBalita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('balita.vitamin.input_cetak');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        if (!$bulan && !$tahun) {
            $month = date('m');
            $year = date('Y');
        } elseif ($bulan) {
            $month = $bulan;
            $year = date('Y');
        } elseif ($bulan && $tahun) {
            $month = $bulan;
            $year = $tahun;
        } else {
            $this->validate($request, [
                'bulan' => 'required',
            ]);
        }
        $posyandu = $request->posyandu ?? 'Posyandu Mawar';

        $vitaminBalita = Vitaminbalita::where('status', 'sukses')
            ->where('posyandu', $posyandu)
            ->orderBy('updated_at', 'asc')
            ->whereMonth('updated_at', $month)
            ->whereYear('updated_at', $year)
            ->get();

        return view('balita.vitamin.cetak', compact('vitaminBalita', 'posyandu', 'tahun', 'bulan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vitaminbalita  $vitaminbalita
     * @return \Illuminate\Http\Response
     */
    public function show(Vitaminbalita $vitaminbalita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vitaminbalita  $vitaminbalita
     * @return \Illuminate\Http\Response
     */
    public function edit(Vitaminbalita $vitaminbalita)
    {
        return view('balita.vitamin.edit', compact('vitaminbalita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vitaminbalita  $vitaminbalita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vitaminbalita $vitaminbalita)
    {

        $data['status'] = 'sukses';

        $data['jenis'] = $request->jenis;

        Vitaminbalita::where('id', $vitaminbalita->id)
            ->update($data);

        return redirect('antri/balita/vitamin?posyandu=' . $request->posyandu . '')->with('message', 'sukses melakukan pemberian vitamin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vitaminbalita  $vitaminbalita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vitaminbalita $vitaminbalita)
    {
        Vitaminbalita::where('id', $vitaminbalita->id)
            ->delete();

        return redirect()->back()->with('message', 'Berhasil menghapus data');
    }
}
