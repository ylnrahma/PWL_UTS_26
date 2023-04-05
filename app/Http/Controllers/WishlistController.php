<?php

namespace App\Http\Controllers;
 
use App\Models\Healing;
use Illuminate\Http\Request;


class WishlistController extends Controller
{
    public function index(){

        $wishlist = Posyandu::all();

        $wishlist = Posyandu::all();

        return view('wishlist', compact('wishlist'));
    }
}
