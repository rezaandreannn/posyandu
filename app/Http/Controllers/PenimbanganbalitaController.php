<?php

namespace App\Http\Controllers;

use App\Models\Penimbanganbalita;
use Illuminate\Http\Request;

class PenimbanganbalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posyandu = $request->posyandu ?? 'Posyandu Mawar';

        $penimbanganBalita = Penimbanganbalita::where('status', 'sukses')
            ->where('posyandu', $posyandu)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('balita.penimbangan.index', compact('penimbanganBalita'));
    }

    public function antri(Request $request)
    {
        $posyandu = $request->posyandu ?? 'Posyandu Mawar';

        $penimbanganBalita = Penimbanganbalita::where('status', 'antri')
            ->where('posyandu', $posyandu)
            ->get();

        return view('balita.penimbangan.antri', compact('penimbanganBalita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('balita.penimbangan.input_cetak');
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


        $penimbanganBalita = Penimbanganbalita::where('status', 'sukses')
            ->where('posyandu', $posyandu)
            ->orderBy('updated_at', 'asc')
            ->whereMonth('updated_at', $month)
            ->whereYear('updated_at', $year)
            ->get();

        return view('balita.penimbangan.cetak', compact('penimbanganBalita', 'bulan', 'tahun', 'posyandu'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penimbanganbalita  $penimbanganbalita
     * @return \Illuminate\Http\Response
     */
    public function show(Penimbanganbalita $penimbanganbalita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penimbanganbalita  $penimbanganbalita
     * @return \Illuminate\Http\Response
     */
    public function edit(Penimbanganbalita $penimbanganbalita)
    {
        return view('balita.penimbangan.edit', compact('penimbanganbalita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penimbanganbalita  $penimbanganbalita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penimbanganbalita $penimbanganbalita)
    {

        $data = $request->validate([
            'berat_badan' => 'required',
            'tinggi_badan' => 'required|numeric'
        ]);

        $data['status'] = 'sukses';

        Penimbanganbalita::where('id', $penimbanganbalita->id)
            ->update($data);

        return redirect('antri/balita/penimbangan?posyandu=' . $request->posyandu . '')->with('message', 'sukses melakukan penimbangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penimbanganbalita  $penimbanganbalita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penimbanganbalita $penimbanganbalita)
    {
        Penimbanganbalita::where('id', $penimbanganbalita->id)
            ->delete();

        return redirect()->back()->with('message', 'Berhasil menghapus data');
    }
}
