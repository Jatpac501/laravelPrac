<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    public $timestamps = false;
    protected $table = 'subjects';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'teacher_id'];
    public function teacher()
    {
        return $this->belongsTo(Teachers::class);
    }
}
