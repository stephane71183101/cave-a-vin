<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\winecollection;

class SearchResultController extends Controller
{
    public function showSelection() {
        return view('searchResult');
    }
 
}
