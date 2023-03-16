<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Validator;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;

class HomeController extends Controller
{
	public function index()
	{
        $images = [];
        $categories = Category::where('status', 1)->where('parent_id', 0)->get();
        $products = Products::get();
        $text = User::get();
        return view('index', compact('images', 'categories', 'products', 'text'));
	}

    public function contact()
    {
        return view('contact');
    }
    public function enquiry()
    {
        return view('enquiry');
    }

    public function about()
    {
        return view('about');
    }
}    
