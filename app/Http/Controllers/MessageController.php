<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function contact(Request $request)
    {
        $data = $request->validate([
            "name"=> "required|string",
            "email"=>"required|email",
            "subject"=> "nullable|string",
            "message"=> "required|string"
        ]);

        Message::create($data);
        return back();
    }
    
    public function enroll(Request $request)
    {
        $data = $request->validate([
            "name"=> "required|string",
            "email"=>"required|email",
            "spec"=> "nullable|string",
            "course_id"=> "required|exists:courses,id"
        ]);

        $student = Student::create($data);
        $student_id = $student->id;
        $course_id = $request->course_id;

        DB::table("course_student")->insert([
            "course_id" => $course_id,
            "student_id" => $student_id,
            "created_at" => now(),
            "updated_at" => now()
        ]);

        return back();

    }    
}    
