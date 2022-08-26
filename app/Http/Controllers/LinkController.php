<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinkController extends Controller
{
    function getAllData() {
        $links = Link::all();
        return $links;
    }

    function returnSpecificData($slug) {
        $links = Link::where('slug', '=', $slug)->first();
        return $links;
    }

    function returnAllData() {
        $links = $this->getAllData();
        return $links;
    }

    function redirectToURL($slug) {
        $links = Link::where('slug', '=', $slug)->first();
        if(empty($links)) {
            abort(404);
        } else {
            $links->clicks = $links->clicks+1;
            $links->update();

            $linkURL = $links->url;

            return view('redirect', compact('linkURL'));
        }
    }
}
