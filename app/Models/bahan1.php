<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bahan1 extends Model
{
    use HasFactory;
    protected $fillable =['nama_bahan', 'harga1'];

    // public	function	bahan1(){
    //     return	$this->belongsTo('App\Models\bahan1');
    // }
}
