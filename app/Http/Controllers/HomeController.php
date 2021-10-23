<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $banner = Banner::latest()->get();
        $category = Category::latest()->take(9)->get();
        $featured = Product::where('is_featured', '1')->latest()->take(30)->get();
        $hot = Product::where('is_featured', '1')->where('is_offer', 1)->latest()->take(30)->get();
        $newArrival = Product::latest()->take(30)->get();
        return view('website.index', compact('banner','category','featured', 'hot','newArrival'));
    }
}
