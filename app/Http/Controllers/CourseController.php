<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = course::all();
        return view('layouts.Added_course', compact('course'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.Added_course');    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_course' => 'required|string|max:255',
            'description_course' => 'nullable|string',
            'image_course' => 'nullable|string',
            'video_course' => 'nullable|string',
            'price_course' => 'nullable|numeric',
        ]);

        course::create([
            'name_course' => $request->name_course,
            'description_course' => $request->description_course,
            'image_course' => $request->image_course,
            'video_course' => $request->video_course,
            'price_course' => $request->price_course,
        ]);
        return redirect()->route( 'course.index')->with('success', 'course created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        //
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
        $course = cours::findOrFail($id);
        $course->update([
            'name_course' => $request->name_course,
            'description_course' => $request->description_course,
            'image_course' => $request->image_course,
            'video_course' => $request->video_course,
            'price_course' => $request->price_course,
        ]);
        return redirect( 'course')->with('success', 'course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        cours::destroy($id);
        return redirect( 'course')->with('success', 'course deleted successfully.');
    }
}
