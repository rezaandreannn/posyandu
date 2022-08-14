<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit()
    {
        $data = Setting::find(1);

        return view('setting', compact('data'));
    }

    public function update(Request $request, Setting $setting)
    {
        Setting::where('id', $setting->id)
            ->update([
                'waktu_buka' => $request->waktu_buka,
                'waktu_tutup' => $request->waktu_tutup
            ]);

        return redirect()->back()->with('message', 'berhasil mengubah jam buka dan tutup');
    }
}
