<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
	public $table = 't_buyer';
	
	protected $fillable = [
		'nama_lengkap', 'alamat_konsumen','no_telp_komsumen','kode_pos_pembeli'];
}
