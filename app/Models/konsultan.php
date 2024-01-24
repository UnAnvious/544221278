<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konsultan extends Model
{
    use HasFactory;
    protected $fillable =['userID', 'nama', 'jenis_kons'];

    public	function konsultan(){
        return	$this->belongsTo('App\Models\konsultan');
    }
}
