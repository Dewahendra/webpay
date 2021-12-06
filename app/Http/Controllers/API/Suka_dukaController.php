<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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
        $data=Suka_duka::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        ]);

        try {
        $response = Suka_duka::create($validasi);
        return response()->json([
            'sucsess' => true,
            'message' => 'success',
            'data' =>$response
        ]);
    } catch (\Exception $e){
        return response()->json([
            'message'=>'Err',
            'errors'=>$e->getMessage()
        ]);
    }
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
        //
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
        ]);

        try {
        $response = Suka_duka::find($id);
        $response->update($validasi);
        return response()->json([
            'sucsess' => true,
            'message' => 'success',
            'data' =>$response
        ]);
    } catch (\Exception $e){
        return response()->json([
            'message'=>'Err',
            'errors'=>$e->getMessage()
        ]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $suka_duka = Suka_duka::find($id);
            $suka_duka->delete();
            return response()->json([
                'sucsess' => true,
                'message' => 'Success'  
            ]);
        } catch (\Exception $e){
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
        }
    }
}
