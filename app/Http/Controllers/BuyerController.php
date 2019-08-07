<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
        public function index()
    {
    	$data['buyer'] = \DB::table('t_buyer')
    	->get();
    	return view('buyer', $data);
	}
public function create()
    {
        return view('buyer.form');
    }
public function store(Request $request)
    {
        $rule = [
            'nama_lengkap' => 'required|string',
            'alamat_konsumen' => 'required|string',
            'no_telp_konsumen' => 'required|string',
            'kode_pos_pembeli' => 'required|string',
        ];

        $this->validate($request, $rule);
		
    	$input = $request->all();
		
		$buyer = new \App\Buyer;
		$buyer ->nama_lengkap = $input['nama_lengkap'];
		$buyer ->alamat_konsumen = $input['alamat_konsumen'];
		$buyer ->no_telp_konsumen = $input['no_telp_konsumen'];
		$buyer ->kode_pos_pembeli = $input['kode_pos_pembeli'];
		$status = $buyer ->save();
		
    	if ($status) {
    		return redirect('buyer')->with('success', 'Data berhasil ditambahkan');
    	} else {
    		return redirect('buyer/create')->with('error', 'Data gagal ditambahkan');
    	}
    }
 	public function edit(Request $request, $id)
    {
        $data['buyer'] = \DB::table('t_buyer')->find($id);
        return view('buyer.form', $data);
    }
    public function update(Request $request, $id)
    {
        $rule = [
            'nama_lengkap' => 'required|string',
            'alamat_konsumen' => 'required|string',
            'no_telp_konsumen' => 'required|string',
            'kode_pos_pembeli' => 'required|string',
        ];
        $this->validate($request, $rule);

        $input = $request->all();
		
		$buyer = \App\Buyer::find($id);

		$buyer = new \App\Buyer;
		$buyer ->nama_lengkap = $input['nama_lengkap'];
		$buyer ->alamat_konsumen = $input['alamat_konsumen'];
		$buyer ->no_telp_konsumen = $input['no_telp_konsumen'];
		$buyer ->kode_pos_pembeli = $input['kode_pos_pembeli'];
		$status = $buyer ->update();
		
        if ($status){
                return redirect('/buyer')->with('success', 'Data berhasil diubah');
            }else{
                return redirect('/buyer/create')->with('error', 'Data gagal diubah');
        }
    }
    public function destroy(Request $request, $id)
    {
		$buyer = \App\Buyer::find($id);
		$status = $buyer->delete();

        if ($status){
                return redirect('/buyer')->with('success', 'Data berhasil dihapus');
            }else{
                return redirect('/buyer/create')->with('error', 'Data gagal dihapus');
        }
    }
}

