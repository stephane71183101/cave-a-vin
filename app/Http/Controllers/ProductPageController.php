<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\winecollection;

class ProductPageController extends Controller
{
    public function showSelection() {
        return view('productPage');
    }
 
}
