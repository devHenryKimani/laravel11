<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'Student/Index', 
            [
                'students' => Student::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Student/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
                'name' =>'required|string',
                'email' =>'required|email|unique:students,email',
                'city' =>'required',
                'phone_number' =>'required|integer',
                'reg_number' =>'required|integer',
                'city' =>'required',
                'bio' =>'required|string',
                
         ]);

        Student::create ([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'city' => $request->input('city'),
            'phone_number' => $request->input('phone_number'),
            'reg_number' => $request->input('reg_number'),
            'bio' => $request->input('bio'),
         ]);

        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return inertia(
            
            'Student/Show',
               [
                'student' => $student
               ]
    
    );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
