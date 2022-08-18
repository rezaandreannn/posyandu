<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bumil;
use App\Models\Setting;
use App\Models\Vitaminbumil;
use Illuminate\Http\Request;
use App\Models\Imunisasibumil;
use App\Models\Penimbanganbumil;
use Illuminate\Support\Facades\Auth;

class BumilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role_id == 1) {
        }


        // dd(Balita::with(['balitaimunisasis', 'balitavitamins'])->get());
        $bumils = Bumil::where('user_id', Auth::user()->id)
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




        return view('frond.bumil.index', compact('bumils', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frond.bumil.tambah');
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
            'nama_ibu' => 'required',
            'nama_suami' => 'required',
            'tgl_lahir' => 'required',
            'tgl_kehamilan' => 'required',
            'alamat' => 'required'
        ]);

        $data['user_id'] = Auth::user()->id;

        Bumil::create($data);

        return redirect('/bumil')->with('message', 'Berhasil menambhkan data ibu hamil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bumil  $bumil
     * @return \Illuminate\Http\Response
     */
    public function show(Bumil $bumil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bumil  $bumil
     * @return \Illuminate\Http\Response
     */
    public function edit(Bumil $bumil)
    {
        return view('frond.bumil.edit', compact('bumil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bumil  $bumil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bumil $bumil)
    {
        $data = $request->validate([
            'nama_ibu' => 'required',
            'nama_suami' => 'required',
            'tgl_lahir' => 'required',
            'tgl_kehamilan' => 'required',
            'alamat' => 'required'
        ]);

        // $data['user_id'] = Auth::user()->id;

        Bumil::where('id', $bumil->id)
            ->update($data);

        return redirect('/bumil')->with('message', 'Berhasil mengubah data ibu hamil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bumil  $bumil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bumil $bumil)
    {
        Bumil::where('id', $bumil->id)
            ->delete();

        return redirect('/bumil')->with('message', 'Berhasil menghapus data ibu hamil');
    }

    public function imunisasiBumil($id)
    {
        $imunisasi = Imunisasibumil::where('bumil_id', $id)
            ->where('status', 'antri')
            ->whereDate('created_at', '=', today())
            ->first();

        if ($imunisasi) {
            return redirect()->back()->with('message', 'anda sudah melakukan pendaftaran');
        }

        Imunisasibumil::create([
            'bumil_id' => $id,
            'posyandu' => Auth::user()->posyandu
        ]);

        return redirect()->route('bumil.index')->with('message', 'berhasil menambahkan antrian imuniasi ke antrian');
    }

    public function vitaminBumil($id)
    {
        $vitamin = Vitaminbumil::where('bumil_id', $id)
            ->where('status', 'antri')
            ->whereDate('created_at', '=', today())
            ->first();

        if ($vitamin) {
            return redirect()->back()->with('message', 'anda sudah melakukan pendaftaran');
        }

        Vitaminbumil::create([
            'bumil_id' => $id,
            'posyandu' => Auth::user()->posyandu
        ]);

        return redirect()->route('bumil.index')->with('message', 'berhasil menambahkan antrian vitamin');
    }

    public function PenimbanganBumil($id)
    {
        $penimbangan = Penimbanganbumil::where('bumil_id', $id)
            ->where('status', 'antri')
            ->whereDate('created_at', '=', today())
            ->first();

        if ($penimbangan) {
            return redirect()->back()->with('message', 'anda sudah melakukan pendaftaran');
        }

        Penimbanganbumil::create([
            'bumil_id' => $id,
            'posyandu' => Auth::user()->posyandu
        ]);

        return redirect()->route('bumil.index')->with('message', 'berhasil menambahkan antrian Penimbangan');
    }
}
