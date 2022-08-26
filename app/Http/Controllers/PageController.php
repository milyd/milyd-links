<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function showIndex() {
        $link = app('App\Http\Controllers\LinkController')->getAllData();
        return view('index', compact('link'));
    }

    function apiPage() {
        return view('api');
    }
}
