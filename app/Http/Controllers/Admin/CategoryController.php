<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = category::all();
        return view('Backend/admin/category/index',compact('categories'));
    }

    public function create()
    {
        return view('Backend/admin/category/create');
    }

    public function store(CategoryRequest $request)
    {
        $category = category::create($request->all());
        return redirect('admin/dashboard/category');
    }

    public function edit($id)
    {
        $category = category::find($id);
        return view('Backend/admin/category/edit',compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = category::find($id);
        $category->category_name = $request->category_name;
        $category->save();
        return redirect('admin/dashboard/category');
    }

    public function destroy($id)
    {
        $category = category::find($id);
        $category->delete();
        return back();
    }
}
