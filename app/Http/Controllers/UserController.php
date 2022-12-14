<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $req = $request->input('posyandu');

        if ($req) {
            $posyandu = $req;
        } else {
            $posyandu = "Posyandu Mawar";
        }

        $users = User::where('posyandu', $posyandu)->get();

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.tambah');
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
            'name' => 'required',
            'role_id' => 'required',
            'nik' => 'required|numeric',
            'posyandu' => 'required',
        ]);

        $data['password'] = bcrypt('password');
        $posyandu = $request->posyandu;
        User::create($data);

        return redirect()->route('user.index')->with('message', 'Berhasil menambhkan data user : ' . $posyandu . '');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'name' => 'required',
            'role_id' => 'required',
            'email' => 'required',
            'nik' => 'required|numeric',
            'posyandu' => 'required',
        ]);

        if ($request->password != null) {
            $data['password'] = bcrypt($request->password);
        }

        User::where('id', $id)->update($data);

        return redirect('user?posyandu=' . $request->posyandu . '')->with('message', 'Berhasil mengubah data user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)
            ->delete();

        return redirect()->back()->with('message', 'Berhasil menghapus data user');
    }
}
