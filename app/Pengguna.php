<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['inname', 'inemail', 'intgl_lahir', 'intelepon', 'ingender', 'inalamat'];

    public $timestamps = false; // disable created_at
}
