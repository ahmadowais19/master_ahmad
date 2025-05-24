<?php

namespace App\Models;

use App\Models\course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CourseVideo extends Model   
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'video_title',
        'video_path',
    ];

    public $timestamps = true;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }  
}
