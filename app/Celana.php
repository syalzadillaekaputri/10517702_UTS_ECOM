<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Celana extends Model
{
	public $table = 't_celana';
	
	protected $fillable = [
		'nama_produk', 'bentuk_produk','color','ukuran','stok'];
}
