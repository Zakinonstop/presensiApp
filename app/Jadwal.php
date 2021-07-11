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
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id', 'id');
    }
}
