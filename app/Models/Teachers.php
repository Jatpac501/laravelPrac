<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $table = 'teachers';

    protected $fillable = ['name', 'surname', 'email', 'phone'];
}
