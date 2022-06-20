<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\winecollection;

class SearchResultController extends Controller
{
    public function showSelection() {
        $messages = SearchResult::all()->sortByDesc('created_at');   
        return view('searchResult');
    }
    $message = new SearchResult();
    $message->type = $_REQUEST->type;
    $message->farbe = $_REQUEST->color;
    $message->land = $_REQUEST->country;
    $message->weinregion = $_REQUEST->region;
    $message->rebsorte = $_REQUEST->varietral;
    $message->jahrgang = $_REQUEST->vintage;
    $message->produzent = $_REQUEST->maker;
    $message->zuckergehalt = $_REQUEST->sugarcontent;


    $message->save();

    return redirect('/winecollection');
    
}
