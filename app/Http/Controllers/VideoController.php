<?php

namespace App\Http\Controllers;
use App\Models\Video;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($courseId)
    {
        $course = Course::with('videos')->findOrFail($courseId);
        return view('layouts.views_course', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($courseId)
    {
        $course = \App\Models\Course::findOrFail($courseId);
    
        // نرسل الكورس للـ View
        return view('layouts.create_videos', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ✅ تحقق من البيانات
        $validated = $request->validate([
            'course_id'    => 'required|exists:courses,id',
            'title'  => 'required|string|max:255',
            'video_path'   => 'required|file|mimes:mp4,mov,avi,wmv|max:500000', // حد أقصى للحجم (500MB)
        ]);
    
        // ✅ خزّن الفيديو في مجلد "videos"
        $videoFileName = $request->file('video_path')->store('videos', 'public');
    
        // ✅ أنشئ سجل الفيديو في قاعدة البيانات
        $video = Video::create([
            'course_id'   => $validated['course_id'],
            'title' => $validated['title'],
            'video_path'  => $videoFileName,
        ]);
    
        // ✅ رجّع المستخدم لصفحة الكورس أو فيديوهاته
        return redirect()->back()->with('success', 'Video uploaded successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
