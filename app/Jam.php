<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jam extends Model
{
    protected $table = 'jam';
    // protected $fillable = 'nama_mapel';
    protected $guarded = [];
    protected $fillable = ['id', 'jam_ke', 'jam_masuk', 'jam_keluar'];
    protected $primaryKey = 'id';
}
