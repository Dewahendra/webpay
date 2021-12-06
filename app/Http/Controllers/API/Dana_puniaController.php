<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Dana_punia;
use Illuminate\Http\Request;

class Dana_puniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Dana_punia::all();
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
            'Jumlah'=>'required',
            'Keterangan'=>'required'
        ]);

        try {
        $response = Dana_punia::create($validasi);
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
            'Jumlah'=>'required',
            'Keterangan'=>'required'
        ]);

        try {
        $response = Dana_punia::find($id);
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
            $dana_punia = Dana_punia::find($id);
            $dana_punia->delete();
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
