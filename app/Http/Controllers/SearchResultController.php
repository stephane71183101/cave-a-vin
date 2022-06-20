<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\winecollection;

class SearchResultController extends Controller
{
    public function showSelection() {
        return view('searchResult');
    }

    public function search() {
    $items = Items::all(['id', 'name']);
    return view('prices.create', compact('id', 'items'));
    }

    public function dropDownShow(Request $request) 
{

   $items = Item::pluck('name', 'id');

   $selectedID = 2;

   return view('items.edit', compact('id', 'items'));

}

 
}
