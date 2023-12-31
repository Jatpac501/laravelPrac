<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    public $timestamps = false;
    protected $table = 'groups';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'course', 'faculty'];
}
