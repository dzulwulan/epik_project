<?php

namespace App\Http\Controllers;


use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Str;
use Illuminate\Support\Facades\DB;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;
        $surats=DB::table('surats')->where('created_by', $id)->get();
        // dd($surats);
        return view('list-surat',compact('surats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input');
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
            'jenis_surat'=> 'required |' ,
            'name'=>'required',
            'nik'=>'required',
            'agama'=>'required',
            'alamat'=>'required',
            'keperluan'=>'required',
            'file_path' => 'file|mimes:doc,docx,txt,pdf,zip',
        ]);
        // dd($request->tgl_lhr);
        $fileName=$request->file_path->getClientOriginalName().'-'. time().'.'.$request->file_path->extension();
        $request->file_path->move(public_path('file'), $fileName);
        Surat::create([
            'no_regis'=>'null',
            'jenis_surat'=> $request ->jenis_surat,
            'name'=>$request->name,
            'nik'=>$request->nik,
            'jenis_kelamin'=>$request->gender,
            'tempat_lhr'=>$request->tempat_lahir,
            'tgl_lhr'=>$request->tgl_lhr,
            'agama'=>$request->agama,
            'warga_negara'=>$request->nasionaliti,
            'pekerjaan'=>$request->pekerjaan,
            'alamat'=>$request->alamat,
            'keperluan'=>$request->keperluan,
            'created_by'=>Auth::user()->id,
            'status'=>'BELUM DIVERIFIKASI',
            'file_path'=>$fileName,

        ]);
        return redirect()->back()->with('message', 'IT WORKS!');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
