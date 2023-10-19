<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    public $timestamps = false;
    protected $table = 'teachers';

    protected $fillable = ['name', 'surname', 'email', 'phone'];
}
