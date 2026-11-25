<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Http\Resources\CourseResource;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return CourseResource::collection(Course::all());
    }

    public function store(StoreCourseRequest $request)
    {
        $validated = $request->validated();

        $validated['is_active'] = $request->boolean('is_active');

        $course = Course::create($validated);

        return (new CourseResource($course))
            ->response()
            ->setStatusCode(201);
    }

    public function show(Course $course)
    {
        return new CourseResource($course);
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        $validated = $request->validated();

        $validated['is_active'] = $request->boolean('is_active');

        $course->update($validated);

        return new CourseResource($course);
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return response()->json([
            'message' => 'Course deleted successfully.'
        ], 200);
    }
}
