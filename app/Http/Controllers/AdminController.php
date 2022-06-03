<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.dashboard', ['categories' => $categories]);
    }

    public function createCategory(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|unique:categories',
             ]);

        Category::create($validatedData);

        return redirect()->route('adminDashboard');
    }

    public function createProduct(Request $request)
    {
        $image = $request->file('image');

        $validatedData = $request->validate([
            'name' => 'required|unique:categories',
            'title' =>'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             ]);

        $imageName = time().rand(99, 100000000).'.'.$image->extension();
        $imagePath = "/Uploads/".$imageName;

        Product::create([
            'name' => $validatedData['name'],
            'title' =>$validatedData['title'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'image' => $imagePath,
            'category_id' => $validatedData['category_id'],
        ]);
        $image->move(public_path($imagePath), $imageName);

        return redirect()->route('adminDashboard');
    }
}
