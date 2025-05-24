<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\course;
use App\Models\CourseVideo;
use App\Models\CourseVideos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = course::all();
        
        return view('layouts.create_courses', compact('courses'));   
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Category $category)
{
    
    return view('layouts.create_courses', compact('category'));
    
}
// return view('layouts.create_courses', compact('category'));

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name_course' => 'required|string|max:255',
            'description_course' => 'required|string',
            'price_course' => 'nullable|numeric',
            'category_id' => 'required|exists:categories,id',
            'image_course' => 'nullable|image',
            'video_course' => 'nullable|mimes:mp4,avi,mov|max:20480', // 20MB
        ]);
    
        $course = new Course();
    
        $course->name_course = $validated['name_course'];
        $course->description_course = $validated['description_course'];
        $course->price_course  = $validated['price_course'] ?? null;
        $course->category_id = $validated['category_id'];
    
        if ($request->hasFile('image_course')) {
            $course->image_course = $request->file('image_course')->store('courses', 'public');
        }
    
        if ($request->hasFile('video_course')) {
            $course->video_course = $request->file('video_course')->store('videos', 'public');
        }
    
        $course->save();
    
        // return redirect()->route('categories.show', $course->category_id)->with('success', 'تم إضافة الكورس بنجاح');
        // return redirect()->route('categories.show', $course->category_id)->with('success', 'تم إضافة الكورس بنجاح');
        return redirect()->route('course.show', $course->id)->with('success', 'تم إضافة الكورس بنجاح');


    }
    


    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        $course->load('videos');
        return view('layouts.views_course', compact('course'));

       
        // return view('layouts.srvices', compact('course'));
        // return view('layouts.course-details', compact('course'));

    }
    public function userShow(course $course)
    {
        $course->load('videos');
        return view('layouts.userShow', compact('course'));

       
        // return view('layouts.srvices', compact('course'));
        // return view('layouts.course-details', compact('course'));

    }
    public function userCourse(course $course)
    {
        $courses = course::all();

        return view('layouts.service', compact('courses'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $course = course::findOrFail($id);
        return view('layouts.edit_course', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $course = course::findOrFail($id);
        $course->update([
            'name_course' => $request->name_course,
            'description_course' => $request->description_course,
            'image_course' => $request->image_course,
            'video_course' => $request->video_course,
            'price_course' => $request->price_course,
            $imagePath = $request->file('image_course')->store('image_course', 'public'),

        ]);

        $imagePath = $request->file('image_course')->store('image_course', 'public');
        return redirect( 'course')->with('success', 'course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        course::destroy($id);
        return redirect( 'course')->with('success', 'course deleted successfully.');
    }
}
