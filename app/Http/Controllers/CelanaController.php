<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelanaController extends Controller
{
        public function index()
    {
    	$data['celana'] = \DB::table('t_celana')
    	->get();
    	return view('celana', $data);
	}

public function create()
    {
        return view('celana.form');
    }
public function store(Request $request)
    {
        $rule = [
            'nama_produk' => 'required|string',
            'bentuk_produk' => 'required|string',
            'color' => 'required|string',
            'ukuran' => 'required|string',
            'stok' => 'required|string',
        ];

        $this->validate($request, $rule);
		
    	$input = $request->all();
		
		$celana = new \App\Celana;
		$celana ->nama_produk = $input['nama_produk'];
		$celana ->bentuk_produk = $input['bentuk_produk'];
		$celana ->color = $input['color'];
		$celana ->ukuran = $input['ukuran'];
		$celana ->stok = $input['stok'];
		$status = $celana ->save();
		
    	if ($status) {
    		return redirect('celana')->with('success', 'Data berhasil ditambahkan');
    	} else {
    		return redirect('celana/create')->with('error', 'Data gagal ditambahkan');
    	}
    }
 	public function edit(Request $request, $id)
    {
        $data['celana'] = \DB::table('t_celana')->find($id);
        return view('celana.form', $data);
    }
    public function update(Request $request, $id)
    {
        $rule = [
                'nama_produk' => 'required|string',
	            'bentuk_produk' => 'required|string',
	            'color' => 'required|string',
	            'ukuran' => 'required|string',
	            'stok' => 'required|string',
        ];
        $this->validate($request, $rule);

        $input = $request->all();
		
		$celana = \App\Celana::find($id);

		$celana = new \App\Celana;
		$celana ->nama_produk = $input['nama_produk'];
		$celana ->bentuk_produk = $input['bentuk_produk'];
		$celana ->color = $input['color'];
		$celana ->ukuran = $input['ukuran'];
		$celana ->stok = $input['stok'];
		$status = $celana ->update();
		
        if ($status){
                return redirect('/celana')->with('success', 'Data berhasil diubah');
            }else{
                return redirect('/celana/create')->with('error', 'Data gagal diubah');
        }
    }
    public function destroy(Request $request, $id)
    {
		$celana = \App\Celana::find($id);
		$status = $celana->delete();

        if ($status){
                return redirect('/celana')->with('success', 'Data berhasil dihapus');
            }else{
                return redirect('/celana/create')->with('error', 'Data gagal dihapus');
        }
    }
}
