<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\SiteContent;
use App\Models\Student;
use App\Models\Test;
use App\Models\Trainer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data["banner"] = SiteContent::select("content")->where("name","banner")->first();

        $data["courses"]= Course::select("id","name","small_desc","price","image","category_id","trainer_id")
        ->orderBy("id","Asc")->take(3)->get();

        $data["Courses"]= Course::count();
        $data["Trainers"]= Trainer::count();
        $data["Students"]= Student::count();

        $data["tests"] = Test::all();

        return view("front.home",compact("data"));
    }
}
