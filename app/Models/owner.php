<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    use HasFactory;
    protected $fillable =['nama_owner', 'budget', 'shm', 'ijin_mendirikan', 'perusahaan_diminta'];
}
