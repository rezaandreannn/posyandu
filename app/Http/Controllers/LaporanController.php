<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Balita;
use Illuminate\Http\Request;
use App\Models\Imunisasibumil;
use App\Models\Imunisasibalita;
use App\Models\Penimbanganbumil;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index(Request $request)
    {

        return view('laporan.input_cetak');
    }

    public function cetak(Request $request)
    {

        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');
        $posyandu = $request->posyandu;

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


        $Lusia = DB::table('balitas')
            ->join('users', 'users.id', '=', 'balitas.user_id')
            ->select('balitas.*', 'users.name', 'users.posyandu')
            ->select(DB::raw('YEAR(CURDATE())-YEAR(balitas.tgl_lahir) AS usia, count(*) as jumlah'))
            ->where('jenis_kelamin', 'L')
            ->where('posyandu', $posyandu)
            ->whereMonth('balitas.created_at', $month)
            ->whereYear('balitas.created_at', $year)
            ->groupBy('usia')
            ->get();

        // dd($Lusia);
        $LjumlahBerdasarkanUsia = [
            'bawah1' => 0,
            'antara1ke2' => 0,
            'antara2ke3' => 0,
            'antara3ke4' => 0,
            'atas4' => 0,
        ];
        foreach ($Lusia as $u) {
            $uint = intval($u->usia);
            $jumlah = intval($u->jumlah);
            if ($uint <= 1) {
                $LjumlahBerdasarkanUsia['bawah1'] += $jumlah;
            } else if ($uint > 1 && $uint <= 2) {
                $LjumlahBerdasarkanUsia['antara1ke2'] += $jumlah;
            } else if ($uint > 2 && $uint <= 3) {
                $LjumlahBerdasarkanUsia['antara2ke3'] += $jumlah;
            } else if ($uint > 3 && $uint <= 4) {
                $LjumlahBerdasarkanUsia['antara3ke4'] += $jumlah;
            } else {
                $LjumlahBerdasarkanUsia['atas4'] += $jumlah;
            }
        }
        $Pusia = DB::table('balitas')
            ->join('users', 'users.id', '=', 'balitas.user_id')
            ->select('balitas.*', 'users.name', 'users.posyandu')
            ->select(DB::raw('YEAR(CURDATE())-YEAR(balitas.tgl_lahir) AS usia, count(*) as jumlah'))
            ->where('jenis_kelamin', 'P')
            ->where('posyandu', $posyandu)
            ->whereMonth('balitas.created_at', $month)
            ->whereYear('balitas.created_at', $year)
            ->groupBy('usia')
            ->get();

        // dd($Lusia);
        $PjumlahBerdasarkanUsia = [
            'bawah1' => 0,
            'antara1ke2' => 0,
            'antara2ke3' => 0,
            'antara3ke4' => 0,
            'atas4' => 0,
        ];
        foreach ($Pusia as $u) {
            $uint = intval($u->usia);
            $jumlah = intval($u->jumlah);
            if ($uint <= 1) {
                $PjumlahBerdasarkanUsia['bawah1'] += $jumlah;
            } else if ($uint > 1 && $uint <= 2) {
                $PjumlahBerdasarkanUsia['antara1ke2'] += $jumlah;
            } else if ($uint > 2 && $uint <= 3) {
                $PjumlahBerdasarkanUsia['antara2ke3'] += $jumlah;
            } else if ($uint > 3 && $uint <= 4) {
                $PjumlahBerdasarkanUsia['antara3ke4'] += $jumlah;
            } else {
                $PjumlahBerdasarkanUsia['atas4'] += $jumlah;
            }
        }

        // penimbangan bumil
        $penimbanganBumil = Penimbanganbumil::where('status', 'sukses')
            ->where('posyandu', $posyandu)
            ->orderBy('updated_at', 'asc')
            ->whereMonth('updated_at', $month)
            ->whereYear('updated_at', $year)
            ->get();
        // ->groupBy('bumil_id');

        // imunisasi Balita
        $imunisasiBalita = Imunisasibalita::where('status', 'sukses')
            ->where('posyandu', $posyandu)
            ->orderBy('updated_at', 'asc')
            ->whereMonth('updated_at', $month)
            ->whereYear('updated_at', $year)
            ->get();

        // imunisasi Bumil
        $imunisasiBumil = Imunisasibumil::where('status', 'sukses')
            ->where('posyandu', $posyandu)
            ->orderBy('updated_at', 'asc')
            ->whereMonth('updated_at', $month)
            ->whereYear('updated_at', $year)
            ->get();

        return view('laporan.cetak', compact('LjumlahBerdasarkanUsia', 'PjumlahBerdasarkanUsia', 'penimbanganBumil', 'imunisasiBalita', 'imunisasiBumil', 'posyandu', 'tahun', 'bulan'));
    }
}
