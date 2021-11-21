<?php

namespace App\Http\Controllers;

use App\Models\Dana_punia;
use Illuminate\Http\Request;

class Dana_puniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = request()->query('search');
        if($search){
            $dana_punia=Dana_punia::where('Nama', 'LIKE', "%{$search}%")->paginate(5);
        }else{
        $dana_punia=Dana_punia::paginate(5);
        }
        $title="Dana Punia";
        return view('admin.dana_punia', compact('title', 'dana_punia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Tambah Data";
        return view('admin.inputdatadp', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'required'=> 'Kolom :Attribute Harus Lengkap',
        ];
        $validasi=$request->validate([
            'Nama'=>'required',
            'Jumlah'=>'required',
            'Keterangan'=>'required'
        ],$message);

        Dana_punia::create($validasi);
        return redirect('dana_punia')->with('success', 'Data Berhasil Tersimpan');
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
        $dana_punia=Dana_punia::find($id);
        $title="Edit Data";
        return view('admin.inputdatadp', compact('title', 'dana_punia'));
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
        $message=[
            'required'=> 'Kolom :Attribute Harus Lengkap',
        ];
        $validasi=$request->validate([
            'Nama'=>'required',
            'Jumlah'=>'required',
            'Keterangan'=>'required'
        ],$message);

        Dana_punia::where('id',$id)->update($validasi);
        return redirect('dana_punia')->with('success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dana_punia::where('id',$id)->delete();
        return redirect('dana_punia')->with('success', 'Data Berhasil Terhapus');
    }
}
