<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_course',
        'description_course',
        'image_course',
        'video_course',
        'price_course',
    ];
    // use SoftDeletes;
    // protected $dates = ['deleted_at'];
}
