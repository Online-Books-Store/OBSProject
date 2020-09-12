<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;
use App\author;

class AuthorController extends Controller
{

    public function index()
    {
        $authors = author::all();
        return view('Backend/admin/author/index',compact('authors'));
    }

    public function create()
    {
        return view('Backend/admin/author/create');
    }

    public function store(AuthorRequest $request)
    {
        $author = author::create($request->all());
        return redirect('admin/dashboard/author')->with('success','Author create success!');
    }

    public function edit($id)
    {
        $author = author::find($id);
        return view('Backend/admin/author/edit',compact('author'));
    }

    public function update(AuthorRequest $request, $id)
    {
        $author = author::find($id);
        $author->name = $request->name;
        $author->save();
        return redirect('admin/dashboard/author')->with('success','Author update success!');
    }

    public function destroy($id)
    {
        $author = author::findOrFail($id);
        $author->delete();
        return redirect('admin/dashboard/author')->with('success','Author delete success!');
    }
}
