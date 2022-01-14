<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gudang extends Model
{
    use HasFactory;
    protected $table = 'data_gudang';
    protected $primaryKey = 'id_gudang';
    protected $fillable = ['nama_gudang'];

    public function stok($id_gudang)
    {
        // return DB::table('data_gudang')
        //         ->join('stok_barang', 'data_gudang.id_gudang', '=', 'stok_barang.id_gudang')
        //         // ->select('jenis_barang.nama_jenis', 'data_barang.nama_barang', 'data_barang.kode_barang')
        //         ->where('stok_barang.id_gudang', '=', $id_gudang)
        //         ->get()->toArray();

        
        return StokBarang::where('id_gudang', $id_gudang)->get();
        
                // dd($cek);

    }
}
