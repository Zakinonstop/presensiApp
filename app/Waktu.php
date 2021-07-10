<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waktu extends Model
{
    //
    protected $table = 'waktu';
    // protected $fillable = 'nama_mapel';
    protected $guarded = [];
    protected $fillable = ['id', 'jam_ke'];
    protected $primaryKey = 'id';

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
