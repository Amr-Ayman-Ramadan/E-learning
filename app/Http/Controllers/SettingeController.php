<?php

namespace App\Http\Controllers;

use App\Models\Settinge;
use Illuminate\Http\Request;

class SettingeController extends Controller
{
    public function index()
    {
        $data["settinges"] = Settinge::first();
        return view("front.contact.index")->with($data);
    }
}
