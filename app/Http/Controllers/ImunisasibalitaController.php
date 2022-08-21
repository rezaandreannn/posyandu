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
    public function index(Request $request)
    {
        $posyandu = $request->posyandu ?? 'Posyandu Mawar';

        $imunisasiBalita = Imunisasibalita::where('status', 'sukses')
            ->where('posyandu', $posyandu)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('balita.imunisasi.index', compact('imunisasiBalita'));
    }

    public function antri(Request $request)
    {

        $posyandu = $request->posyandu ?? 'Posyandu Mawar';

        $imunisasiBalita = Imunisasibalita::where('status', 'antri')
            ->where('posyandu', $posyandu)
            ->get();

        return view('balita.imunisasi.antri', compact('imunisasiBalita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('balita.imunisasi.input_cetak');
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

        $imunisasiBalita = Imunisasibalita::where('status', 'sukses')
            ->where('posyandu', $posyandu)
            ->orderBy('updated_at', 'asc')
            ->whereMonth('updated_at', $month)
            ->whereYear('updated_at', $year)
            ->get();

        return view('balita.imunisasi.cetak', compact('imunisasiBalita', 'posyandu', 'bulan', 'tahun'));
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
        return view('balita.imunisasi.edit', compact('imunisasibalita'));
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
        $data = $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
        ]);
        $data['status'] = 'sukses';

        $data['jenis'] = $request->jenis;

        Imunisasibalita::where('id', $imunisasibalita->id)
            ->update($data);

        return redirect('antri/balita/imunisasi?posyandu=' . $request->posyandu . '');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imunisasibalita  $imunisasibalita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imunisasibalita $imunisasibalita)
    {
        Imunisasibalita::where('id', $imunisasibalita->id)
            ->delete();

        return redirect()->back()->with('message', 'Berhasil menghapus data');
    }
}
