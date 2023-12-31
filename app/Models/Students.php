<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    public $timestamps = false;
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'surname', 'phone', 'group_id', 'headOfGroup'
    ];
}
