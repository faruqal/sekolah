<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
   protected $table ='siswa';
   protected $fillable=['nama','kelas','jenisKelamin','umur','alamat','avatar'];
   // public $timestamps = false;

}
