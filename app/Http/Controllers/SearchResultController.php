<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchResultController extends Controller
{
    public function showSelection() {
        return view('searchResult');
    }
 
}
