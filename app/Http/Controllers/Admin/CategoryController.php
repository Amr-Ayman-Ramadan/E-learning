<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data["categories"] = Category::all();
        return view("admin.categories.index")->with($data);
    }

    public function create()
    {
        return view("admin.categories.create");
    }
    public function store(Request $request)
    {
        $data = $request->validate([

            "name" => "required|string"
        ]);
        Category::create($data);
        return redirect(route("admin.categories.index"));
    }

    public function edit($id)
    {
        $data["categories"] = Category::findOrFail($id);
        return view("admin.categories.edit")->with($data);   
    }
    public function update(Request $request,$id)
    {
        $data = $request->validate([

            "name" => "required|string"
        ]);
        $Category = Category::findOrFail($id);
        $Category->update($data);
        return back();
    }
    public function delete($id)
    {
        $Category = Category::findOrFail($id);
        $Category->delete();
        return redirect(route("admin.categories.index"));


    }
}
