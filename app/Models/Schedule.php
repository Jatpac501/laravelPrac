<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'schedule';
    protected $fillable = ['group_id', 'dayWeek', 'couple', 'subject_id', 'room_id' ];
    public function group()
    {
        return $this->belongsTo(Groups::class, 'group_id');
    }
    public function subject()
    {
        return $this->belongsTo(Subjects::class, 'subject_id');
    }
    public function room()
    {
        return $this->belongsTo(Rooms::class, 'room_id');
    }
}

