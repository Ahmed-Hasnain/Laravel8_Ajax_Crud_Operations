<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('students');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:200',
            'email'=>'required|email|max:200',
            'phone'=>'required|max:200',
            'course'=>'required|max:200'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'=>400,
                'message'=>$validator->messages()
            ]);
        }
        else{
            $student = new Student;
            $student->name = $request->input('name');
            $student->email = $request->input('email');
            $student->phone = $request->input('phone');
            $student->course = $request->input('course');
            $student->save();

            return response()->json([
                'status'=>200,
                'message'=>'Student Added Successfully'
            ]);
        }
    }

    function fetchStudent(){
        $student = Student::all();

        return response()->json([
            'student'=>$student,
        ]);
    }


    function editStudent($id){

        $student = Student::find($id);
        if ($student) {
            return response()->json([
            'status'=>200,
            'student'=>$student,
           ]);
        }
        else{
            return response()->json([
            'status'=>404,
            'error'=>'Student Not Found',
           ]);
        }  
    }

    public function updateStudent(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:200',
            'email'=>'required|email|max:200',
            'phone'=>'required|max:200',
            'course'=>'required|max:200'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'=>400,
                'message'=>$validator->messages()
            ]);
        }
        else{
            $student = Student::find($id);
            $student->name = $request->input('name');
            $student->email = $request->input('email');
            $student->phone = $request->input('phone');
            $student->course = $request->input('course');
            $student->save();

            return response()->json([
                'status'=>200,
                'message'=>'Student Updated Successfully'
            ]);
        }
    }


    public function deleteStudent($id){
        $student = Student::find($id);
        if ($student) {
            $student->delete();
            return response()->json([
            'status'=>200,
            'student'=>'Student Deleted Successfully',
           ]);
        }
        else{
            return response()->json([
            'status'=>404,
            'error'=>'Student Not Found',
           ]);
        }  
    }
}
