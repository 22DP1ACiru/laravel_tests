<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'banner_address' => 'required|max:255',
            'member_count' => 'required|integer',
        ]);

        $course = Course::create($validated);
        return response()->json($course);
    }

    public function index() {
        return response()->json(Course::all());
    }
}
