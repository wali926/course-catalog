<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('category')->get();
        return CourseResource::collection($courses);
    }

    public function byCategory($id)
    {
        $courses = Course::where('category_id', $id)->with('category')->get();
        return CourseResource::collection($courses);
    }
}
