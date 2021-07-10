<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //
    protected $table = 'jadwal';
    // protected $fillable = 'nama_mapel';
    protected $guarded = [];
    protected $fillable = ['id', 'hari', 'jam_id', 'mapel_id', '_token'];
    protected $primaryKey = 'id';

    public function jam()
    {
        return $this->belongsTo(Jam::class, 'jam_id', 'id');

        // return $this->hasOne(Jam::class, 'jam_id', 'id');
    }

    // public function waktu()
    // {
    //     return $this->belongsTo(Waktu::class);
    // }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id', 'id');
    }
}
