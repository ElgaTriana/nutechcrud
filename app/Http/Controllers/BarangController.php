<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $barang=Barang::all();

        return view('welcome')
        ->with('barang', $barang);
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
        if($request->ajax()){

            $input = $request->all();

            $request->input('barang');

            $rules=[
                'barang'=>'required|unique:barang',
                'stok'=>'required',
                'harga_beli'=>'required',
                'harga_jual'=>'required',
                'foto' => 'required|mimes:jpg,png|max:100'
            ];

            $validasi=\Validator::make($request->all(),$rules);

            if($validasi->fails()){
                $data=array(
                    'success'=>false,
                    'pesan'=>$validasi->errors()->first()
                );
            }else{

                if(!is_dir('fotobarang/')){
                    mkdir('fotobarang/', 0777, TRUE);
                }

                $file = $request->file('foto');

                $nama_file = time()."_".$file->getClientOriginalName();

                $tujuan_upload = 'fotobarang';

                $file->move($tujuan_upload,$nama_file);

                $var=new Barang;
                $var->barang=$request->input('barang');
                $var->harga_beli=$request->input('harga_beli');
                $var->harga_jual=$request->input('harga_jual');
                $var->stok=$request->input('stok');
                $var->foto=$nama_file;
                $var->insert_user="elga";
                $var->update_user="elga";
                $var->save();

                $data=array(
                    'success'=>true,
                    'pesan'=>'Data berhasil di tambah',
                    'error'=>''
                );
            }

            return $data;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if($request->ajax()){
            $var=Barang::findOrFail($id);

            return $var;
        }
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
        if($request->ajax()){

            if ($request->hasFile('foto')) {

                $rules=[
                    'barang'=>'required',
                    'stok'=>'required',
                    'harga_beli'=>'required',
                    'harga_jual'=>'required',
                    'foto' => 'required|mimes:jpg,png|max:100'
                ];

                $validasi=\Validator::make($request->all(),$rules);

                if($validasi->fails()){
                    $data=array(
                        'success'=>false,
                        'pesan'=>$validasi->errors()->first()
                    );
                }else{

                    $file = $request->file('foto');

                    $nama_file = time()."_".$file->getClientOriginalName();

                    $tujuan_upload = 'fotobarang';

                    $file->move($tujuan_upload,$nama_file);

                    $var= Barang::findOrfail($id);
                    $var->barang=$request->input('barang');
                    $var->harga_beli=$request->input('harga_beli');
                    $var->harga_jual=$request->input('harga_jual');
                    $var->stok=$request->input('stok');
                    $var->foto=$nama_file;
                    $var->update_user="elga";
                    $var->updated_at=Carbon::now();
                    $var->save();

                    $data=array(
                        'success'=>true,
                        'pesan'=>'Data berhasil di update',
                        'error'=>''
                    );
                }
            }else{
                $rules=[
                    'barang'=>'required',
                    'stok'=>'required',
                    'harga_beli'=>'required',
                    'harga_jual'=>'required'
                ];

                $validasi=\Validator::make($request->all(),$rules);

                if($validasi->fails()){
                    $data=array(
                        'success'=>false,
                        'pesan'=>$validasi->errors()->first()
                    );
                }else{

                    $var= Barang::findOrfail($id);
                    $var->barang=$request->input('barang');
                    $var->harga_beli=$request->input('harga_beli');
                    $var->harga_jual=$request->input('harga_jual');
                    $var->stok=$request->input('stok');
                    $var->update_user="elga";
                    $var->updated_at=Carbon::now();
                    $var->save();

                    $data=array(
                        'success'=>true,
                        'pesan'=>'Data berhasil di update',
                        'error'=>''
                    );
                }
            }

            return $data;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if($request->ajax()){
            $var=Barang::findOrFail($id);
            $var->update_user="elga";
            $var->deleted_at=Carbon::now();
            $var->save();
            if($var){
                $data=array(
                    'success'=>true,
                    'pesan'=>'Data berhasil dihapus',
                    'error'=>''
                );
            }else{
                $data=array(
                    'success'=>false,
                    'pesan'=>'Data gagal dihapus',
                    'error'=>''
                );
            }

            return $data;
        }
    }
}
