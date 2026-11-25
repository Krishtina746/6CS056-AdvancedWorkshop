<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return StudentResource::collection(Student::all());
    }

    public function store(StoreStudentRequest $request)
    {
        $student = Student::create($request->validated());

        return (new StudentResource($student))
            ->response()
            ->setStatusCode(201);
    }

    public function show(Student $student)
    {
        return new StudentResource($student);
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        return new StudentResource($student);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json([
            'message' => 'Student deleted successfully.'
        ]);
    }
}
