<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::orderBy('nama')->paginate(5);
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswas = Siswa::all();
        return view('siswa.create-siswa',compact('siswas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nipd'=>'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'kelas' => 'required',
            'alamat' => 'required',
        ]);

        Siswa::create(
            [
                'nipd' =>$request->nipd,
                'nama' =>$request->nama,
                'jenis_kelamin' =>$request->jenis_kelamin,
                'kelas' =>$request->kelas,
                'alamat' =>$request->alamat,
            ]                                           
        );
        return redirect()->route('siswa.index')->with(['success' => 'Data Siswa '.$request->id.'Berhasil Di Tambah']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswas = Siswa::find($id);
        return view('siswa.show-siswa', compact('siswas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswas = Siswa::find($id);
        return view('siswa.edit-siswa', compact('siswas'));
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
        $request->validate([
            'nipd' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
        ]);

        $siswa = Siswa::find($id);
        $siswa->nipd = $request->get('nipd');
        $siswa->nama = $request->get('nama');
        $siswa->jenis_kelamin = $request->get('jenis_kelamin');
        $siswa->kelas = $request->get('kelas');
        $siswa->alamat = $request->get('alamat');
        $siswa->save();

        return redirect()->route('siswa.index')->with(['success' => 'Data Siswa'.$request->id.'Berhasil Di Ubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Siswa::find($id)->delete($request->all());
        return redirect()->route('siswa.index')->with(['danger' => 'Data Siswa '.$request->id.'Berhasil Di Hapus']);
    }
}
