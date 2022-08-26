<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\Posyandu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_id != 1) {
            return redirect('/');
        }

        // $mawar = DB::table('balitas')
        //     ->join('users', 'users.id', '=', 'balitas.user_id')
        //     ->select('balitas.*', 'users.name', 'users.posyandu')
        //     ->where('users.posyandu', 'Posyandu Mawar')
        //     ->get();
        // $teratai = DB::table('balitas')
        //     ->join('users', 'users.id', '=', 'balitas.user_id')
        //     ->select('balitas.*', 'users.name', 'users.posyandu')
        //     ->where('users.posyandu', 'Posyandu Teratai')
        //     ->get();
        // $matahari = DB::table('balitas')
        //     ->join('users', 'users.id', '=', 'balitas.user_id')
        //     ->select('balitas.*', 'users.name', 'users.posyandu')
        //     ->where('users.posyandu', 'Posyandu Matahari')
        //     ->get();
        // $melati = DB::table('balitas')
        //     ->join('users', 'users.id', '=', 'balitas.user_id')
        //     ->select('balitas.*', 'users.name', 'users.posyandu')
        //     ->where('users.posyandu', 'Posyandu Melati')
        //     ->get();
        // $anggrek = DB::table('balitas')
        //     ->join('users', 'users.id', '=', 'balitas.user_id')
        //     ->select('balitas.*', 'users.name', 'users.posyandu')
        //     ->where('users.posyandu', 'Posyandu Anggrek')
        //     ->get();

        // // ibu hamil
        // $mawar_i = DB::table('bumils')
        //     ->join('users', 'users.id', '=', 'bumils.user_id')
        //     ->select('bumils.*', 'users.name', 'users.posyandu')
        //     ->where('users.posyandu', 'Posyandu Mawar')
        //     ->get();
        // $teratai_i = DB::table('bumils')
        //     ->join('users', 'users.id', '=', 'bumils.user_id')
        //     ->select('bumils.*', 'users.name', 'users.posyandu')
        //     ->where('users.posyandu', 'Posyandu Teratai')
        //     ->get();
        // $matahari_i = DB::table('bumils')
        //     ->join('users', 'users.id', '=', 'bumils.user_id')
        //     ->select('bumils.*', 'users.name', 'users.posyandu')
        //     ->where('users.posyandu', 'Posyandu Matahari')
        //     ->get();
        // $melati_i = DB::table('bumils')
        //     ->join('users', 'users.id', '=', 'bumils.user_id')
        //     ->select('bumils.*', 'users.name', 'users.posyandu')
        //     ->where('users.posyandu', 'Posyandu Melati')
        //     ->get();
        // $anggrek_i = DB::table('bumils')
        //     ->join('users', 'users.id', '=', 'bumils.user_id')
        //     ->select('bumils.*', 'users.name', 'users.posyandu')
        //     ->where('users.posyandu', 'Posyandu Anggrek')
        //     ->get();


        $posyandus = Posyandu::all();


        return view('dashboard', compact('posyandus'));

        // return view('dashboard', compact('mawar', 'teratai', 'matahari', 'melati', 'anggrek', 'mawar_i', 'teratai_i', 'matahari_i', 'melati_i', 'anggrek_i'));
    }
}
