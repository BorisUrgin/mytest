<?php

namespace App\Http\Controllers;

use App\Category;
use App\Shops;
use Illuminate\Support\Facades\Log;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shops::with(['manufacturer', 'category'])->get();
        $categories = Category::all();
        Log::info($shops);
        return view('shop', ['shops' => $shops, 'categories' => $categories]);
    }
}
