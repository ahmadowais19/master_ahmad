<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // جلب جميع التصنيفات
    public function index()
    {
        $categories = Category::all();
        return response()->json([
            'status' => true,
            'data' => $categories,
        ]);
    }

    // جلب كورسات أو فيديوهات مرتبطة بتصنيف معيّن
    public function show($id)
    {
        $category = Category::with('courses.videos')->find($id);

        if (!$category) {
            return response()->json([
                'status' => false,
                'message' => 'Category not found',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $category,
        ]);
    }
}
