<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        # code...
    }
}
