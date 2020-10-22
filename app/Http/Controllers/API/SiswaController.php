<?php

namespace App\Http\Controllers\API;

use App\Models\Siswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return response()->json([
            'message' => 'success',
            'data' => $siswa,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "nama" => "required",
            "no_induk" => "required",
            "sex" => "required",
            "phone" => "required",
        ]);
        if ($validator->fails()) {
			return response()->json($validator->errors(), 422);
		} else {
            Siswa::create($request->all());
            return response()->json([
                'message' => 'success'
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "nama" => "required",
            "no_induk" => "required",
            "sex" => "required",
            "phone" => "required",
        ]);
        if ($validator->fails()) {
			return response()->json($validator->errors(), 422);
		} else {
            $siswa = Siswa::where('id', $id)->first();
            Siswa::create($request->all());
            return response()->json([
                'message' => 'success'
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
        $siswa = Siswa::where('id', $id)->first();
        $siswa->delete();
    }
}
