<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $students = Student::paginate(5);
        //hoặc $students = Student::orderBy('id', 'desc')->get();
        return view('students.list', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */

     //show su dung phuong thuc GET, Route name la student.show
    public function show(Student $student)
    {
        $students = Student::find($student);
        return view('students.show', ['student' => $student]);



        // nếu truyền Student $student -> thực hiện truy vấn tìm Student có id
        // $studentObj = $student;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->age = $request->age;
        $student->adress = $request->adress;
        $student->gender = $request->gender;
        $student->is_active = $request->is_active;

        // Thuc hien goi phuong thuc save() de luu du lieu
        $student->save();

        // Cach 2: $student->update(['name' => $request->name]);
        // Hoac $student->update([$request->all()])
        // Khong can save

        return redirect()->route('students.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        if($student) {
            $student->delete(); // tra ve ket qua true/false
        }

        // Cach 2: Student::destroy($student->id); // tra ve so luong ban ghi bi xoa
        // Redirect ve danh sach (co thuc hien truy van lay ds moi)
        return redirect()->route('students.index')->with();
    }
}
