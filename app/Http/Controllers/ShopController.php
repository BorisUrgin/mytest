<?php

namespace App\Http\Controllers;

use App\Shops;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shops::with(['manufacturer', 'category'])->get();
        return view('shop', ['shops' => $shops]);
    }
}
