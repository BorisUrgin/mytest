<?php

namespace App\Http\Controllers;

use App\Shops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ShopController extends Controller
{
    public function index()
    {
        $shops = shops::all();
        return view('shop', ['shops' => $shops]);
    }
}
