<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    public $timestamps = false;
    protected $table = 'rooms';
    protected $primaryKey = 'id';
    protected $fillable = ['classroom', 'building'];
}
