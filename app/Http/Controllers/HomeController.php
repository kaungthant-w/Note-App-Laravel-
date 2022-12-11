<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
    public function index() {
        $data = Post::all();
        // dd($data);
        return view("home",compact("data"));
    }

    public function new() {
        return view("new");
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $data = new Post();
        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();
        return redirect("/");
    }

    public function edit($id) {
        $data = Post::findOrFail($id);
        // dd($data);
        return view("edit", compact("data"));
    }

    public function update(Request $request , $id) {

        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $data = Post::findOrFail($id);
        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();
        return redirect("/");
    }

    public function delete($id) {

        Post::findOrFail($id)->delete();
        return redirect("/");
    }
}
