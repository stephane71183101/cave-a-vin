<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\winecollection;

class SearchResultController extends Controller
{
    // public function showSelection() {
    //     $categories = Category::all(['id','name']);
    //     return view('products.create',compact('categories'));
    // }

    public function showSelection() {
        return view('searchResult');
    }
 
}
