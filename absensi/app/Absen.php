<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = 'absens';

    protected $fillable = [
        'id',
        'check_in',
        'user_id',
        'check_out',
        'tanggal'
    ];

    public function user () {
        return $this->belongsTo('App\user', 'user_id', 'id');
    }
}
