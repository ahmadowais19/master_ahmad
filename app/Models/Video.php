<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    // use HasFactory;
    public function course()
    {
        
        return $this->belongsTo(Course::class);
    }
    protected $fillable = [
        'course_id',
        'title',
        'video_path',
    ];
}
