<?php

namespace App\Http\Controllers;

use App\Models\Purnama_tilem;
use Illuminate\Http\Request;

class Purnama_tilemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request()->query('search');
        if($search){
            $purnama_tilem=Purnama_tilem::where('Nama', 'LIKE', "%{$search}%")->paginate(5);
        }else{
        $purnama_tilem=Purnama_tilem::paginate(5);
        }
        $title="Purnama-Tilem";
        return view('admin.purnama_tilem', compact('title', 'purnama_tilem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Tambah Data";
        return view('admin.inputdatapt', compact('title'));
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
            'required'=> 'Kolom :Attribute Harus Diisi',
        ];
        $validasi=$request->validate([
            'Nama'=>'required',
            'Januari'=>'required',
            'Februari'=>'required',
            'Maret'=>'required',
            'April'=>'required',
            'Mei'=>'required',
            'Juni'=>'required',
            'Juli'=>'required',
            'Agustus'=>'required',
            'September'=>'required',
            'Oktober'=>'required',
            'November'=>'required',
            'Desember'=>'required'
        ],$message);

        Purnama_tilem::create($validasi);
        return redirect('purnama_tilem')->with('success', 'Data Berhasil Tersimpan');
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
        $purnama_tilem=Purnama_tilem::find($id);
        $title="Edit Data";
        return view('admin.inputdatapt', compact('title', 'purnama_tilem'));
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
            'required'=> 'Kolom :Attribute Harus Diisi',
        ];
        $validasi=$request->validate([
            'Nama'=>'required',
            'Januari'=>'required',
            'Februari'=>'required',
            'Maret'=>'required',
            'April'=>'required',
            'Mei'=>'required',
            'Juni'=>'required',
            'Juli'=>'required',
            'Agustus'=>'required',
            'September'=>'required',
            'Oktober'=>'required',
            'November'=>'required',
            'Desember'=>'required'
        ],$message);

        Purnama_tilem::where('id',$id)->update($validasi);
        return redirect('purnama_tilem')->with('success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Purnama_tilem::where('id',$id)->delete();
        return redirect('purnama_tilem')->with('success', 'Data Berhasil Terhapus');
    }
}
