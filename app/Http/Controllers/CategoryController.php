<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('layouts.Added_course', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('layouts.Add_course');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // تخزين الصورة في مجلد public/images أو أي مسار آخر حسب الحاجة
        $imagePath = $request->file('image')->store('images', 'public');
    
        // إنشاء التصنيف مع حفظ المسار
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath, // مسار الصورة
        ]);
    
        return redirect()->route('category.index')->with('success', 'تم إنشاء التصنيف بنجاح');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', 'تم تحديث التصنيف بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'تم حذف التصنيف بنجاح');
    }
}
