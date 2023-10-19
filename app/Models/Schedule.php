<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $timestamps = false;
    protected $table = 'schedule';
    protected $fillable = ['Week', 'dayWeek', 'Сouple', 'group_id', 'teacher_id', 'subject_id', 'room_id' ];
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
}

