<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class Jam extends Model
{
    protected $table = 'jam';
    // protected $fillable = 'nama_mapel';
    protected $guarded = [];
    protected $fillable = ['id', 'jam_ke', 'jam_masuk', 'jam_keluar'];
    protected $primaryKey = 'id';

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'id', 'jam_id');

        // return $this->belongsTo(Jadwal::class, 'id', 'jam_id');
    }
}
