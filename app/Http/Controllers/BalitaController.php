<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Balita;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\Vitaminbalita;
use App\Models\Imunisasibalita;
use App\Models\Penimbanganbalita;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (Auth::user()->role_id == 1) {
            $posyandu = $request->posyandu ?? 'Posyandu Mawar';
            $balitas =  DB::table('balitas')
                ->join('users', 'users.id', '=', 'balitas.user_id')
                ->select('balitas.*', 'users.name', 'users.posyandu')
                ->where('users.posyandu', $posyandu)
                ->get();
            return view('balita.index', compact('balitas'));
        }


        // dd(Balita::with(['balitaimunisasis', 'balitavitamins'])->get());
        $balitas = Balita::where('user_id', Auth::user()->id)
            ->get();

        $setting = Setting::find(1);
        $time = Carbon::now();

        $tgl = date('d-m-Y', strtotime($setting->waktu_buka));
        $day = date('d-m-Y', strtotime($time));

        $buka =  date('H:i', strtotime($setting->waktu_buka));
        $sekarang =  date('H:i', strtotime($time));
        $tutup =  date('H:i', strtotime($setting->waktu_tutup));

        if ($tgl == $day) {
            if ($sekarang >= $buka && $sekarang <= $tutup) {
                $active = '1';
            } else {
                $active = '0';
            }
        } else {
            $active = '0';
        }


        return view('frond.balita.index', compact('balitas', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frond.balita.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'tgl_lahir' => 'required',
            'berat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $data['user_id'] = Auth::user()->id;
        Balita::create($data);

        return redirect()->route('balita.index')->with('message', 'Berhasil menambhkan data balita ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function show(Balita $balita)
    {
        $balita = Balita::with('balitapenimbangans')
            ->where('id', $balita->id)
            ->first();

        $kms = $balita->balitapenimbangans;

        return view('frond.balita.kms', compact('kms', 'balita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function edit(Balita $balita)
    {
        return view('frond.balita.edit', compact('balita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Balita $balita)
    {

        $data = $request->validate([
            'nama' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'tgl_lahir' => 'required',
            'berat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $data['user_id'] = Auth::user()->id;
        Balita::where('id', $balita->id)
            ->update($data);

        return redirect()->route('balita.index')->with('message', 'Berhasil mengubah data balita ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Balita $balita)
    {

        Balita::where('id', $balita->id)
            ->delete();
        return redirect('/balita')->with('message', 'berhasil menghapus data balita ');
    }

    public function imunisasiBalita($id)
    {
        $imunisasi = Imunisasibalita::where('balita_id', $id)
            ->where('status', 'antri')
            ->whereDate('created_at', '=', today())
            ->first();

        if ($imunisasi) {
            return redirect()->back()->with('message', 'anda sudah melakukan pendaftaran');
        }

        Imunisasibalita::create([
            'balita_id' => $id,
            'posyandu' => Auth::user()->posyandu
        ]);

        return redirect()->route('balita.index')->with('message', 'berhasil menambahkan antrian imuniasi ke antrian');
    }

    public function vitaminBalita($id)
    {
        $vitamin = Vitaminbalita::where('balita_id', $id)
            ->where('status', 'antri')
            ->whereDate('created_at', '=', today())
            ->first();

        if ($vitamin) {
            return redirect()->back()->with('message', 'anda sudah melakukan pendaftaran');
        }

        Vitaminbalita::create([
            'balita_id' => $id,
            'posyandu' => Auth::user()->posyandu
        ]);

        return redirect()->route('balita.index')->with('message', 'berhasil menambahkan antrian vitamin');
    }


    public function PenimbanganBalita($id)
    {
        $penimbangan = Penimbanganbalita::where('balita_id', $id)
            ->where('status', 'antri')
            ->whereDate('created_at', '=', today())
            ->first();

        if ($penimbangan) {
            return redirect()->back()->with('message', 'anda sudah melakukan pendaftaran');
        }

        Penimbanganbalita::create([
            'balita_id' => $id,
            'posyandu' => Auth::user()->posyandu
        ]);

        return redirect()->back()->with('message', 'berhasil menambahkan antrian vitamin');
    }
}
