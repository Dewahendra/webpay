<?php

namespace App\Http\Controllers;

use App\Models\Suka_duka;
use Illuminate\Http\Request;

class Suka_dukaController extends Controller
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
            $suka_duka=Suka_duka::where('Nama', 'LIKE', "%{$search}%")->paginate(5);
        }else{
        $suka_duka=Suka_duka::paginate(5);
        }
        $title="Suka-Duka";
        return view('admin.suka_duka', compact('title', 'suka_duka'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Tambah Data";
        return view('admin.inputdatasd', compact('title'));
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

        Suka_duka::create($validasi);
        return redirect('suka_duka')->with('success', 'Data Berhasil Tersimpan');
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
        $suka_duka=Suka_duka::find($id);
        $title="Edit Data";
        return view('admin.inputdatasd', compact('title', 'suka_duka'));
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

        Suka_duka::where('id',$id)->update($validasi);
        return redirect('suka_duka')->with('success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Suka_duka::where('id',$id)->delete();
        return redirect('suka_duka')->with('success', 'Data Berhasil Terhapus');
    }
}
