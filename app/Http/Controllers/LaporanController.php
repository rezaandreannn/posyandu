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



        // $now = Carbon::now();
        // $b_day = DB::table('balitas')->where(DB::raw('tgl_lahir'), $now);
        // $umur = DB::table('balitas')->get();
        // foreach ($umur as $umur) {
        //     $b_day =  Carbon::parse($umur->tgl_lahir);
        //     $age = $b_day->diffInMonths($now);


        //     // dd($age);

        //     if ($age <= 7) {
        //         // print_r("umur < 7 tahun :" . $age . "<br>");
        //         $tujuh =  [$age];
        //     } elseif ($age > 7 && $age <= 12) {
        //         // print_r("Umur 7 - 12 tahun : " . $age . "<br>");
        //         $tujuh = $dari_7_12 = [$age];
        //     } elseif ($age > 12) {
        //         print_r("Umur > 12 tahun : " . $age . "<br>");
        //         // $tot_age = [$age];
        //     }

        //     // dd($tot_age);
        //     dd($tujuh);
        // }





        // $totals = DB::table('balitas')
        //     ->selectRaw('YEAR(tgl_lahir) year, MONTH(tgl_lahir) umur')
        //     ->selectRaw('count(*) as total')
        //     ->selectRaw("count(case when jenis_kelamin = 'L' then 1 end) as l")
        //     ->selectRaw("count(case when jenis_kelamin = 'P' then 1 end) as p")
        //     ->selectRaw("count(IF(umur < 7,1,NULL)) tujuh")
        //     // ->selectRaw("count(case when status = 'cancelled' then 1 end) as cancelled")
        //     // ->selectRaw("count(case when status = 'bounced' then 1 end) as bounced")
        //     ->get();

        // dd($totals);

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

        // di sini dapat berapa jumlah masing-masing rentang umur itu
        // dd($LjumlahBerdasarkanUsia);
        return view('laporan.cetak', compact('LjumlahBerdasarkanUsia', 'PjumlahBerdasarkanUsia', 'penimbanganBumil', 'imunisasiBalita', 'imunisasiBumil', 'posyandu', 'tahun', 'bulan'));
    }
}
