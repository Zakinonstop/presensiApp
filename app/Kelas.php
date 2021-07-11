<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //
    protected $table = 'kelas';
    // protected $fillable = 'nama_kelas';
    protected $guarded = [];
    protected $fillable = ['id', 'nama_kelas'];
    protected $primaryKey = 'id';

    public function jadwal()
    {
        return $this->hasOne(Jadwal::class, 'id', 'kelas_id');
    }

    public function siswa()
    {
        return $this->hasOne(User::class, 'id', 'kelas_id');
    }
}
