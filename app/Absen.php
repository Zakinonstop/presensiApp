<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Absen extends Model
{
    //
    protected $table = 'absen';
    protected $fillable = ['id', 'user_id', 'date', 'time_in', 'time_out', 'note'];
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
