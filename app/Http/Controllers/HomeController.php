<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::take(4)->get();
        $bannerData = Product::take(10)->get();
        $allcategories = Category::take(3)->get();
        $categoriesForProduct = Category::all();


        return view('welcome', [
            'categories' => $categories,
            'bannerData' => $bannerData,
            'allcategories' => $allcategories,
            'categoriesForProduct' => $categoriesForProduct,
        ]);
    }
}
