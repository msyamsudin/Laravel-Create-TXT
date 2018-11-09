<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['innameid', 'innameonly', 'inemail', 'intgl_lahir', 'intelepon', 'ingender', 'inalamat'];

    public $timestamps = false; // disable created_at
}
