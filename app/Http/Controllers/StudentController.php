<?php

namespace App\Http\Controllers;

use App\Models\Student; 
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // 1. Display the list of students
    public function index(Request $request)
{
    $search = $request->get('search');

    // If there is a search term, filter the results; otherwise, get all.
    $students = Student::where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->get();

    return view('students.index', compact('students'));
}

    // 2. Show the form to add a new student
    public function create()
    {
        return view('students.create');
    }

    // 3. Save the student data to the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    // 4. Show the form to edit a specific student
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // 5. Update the student record in the database
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'required',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    // 6. Delete a student from the database
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}