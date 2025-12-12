<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function show($slug = null)
    {
        $page = Page::where('slug', $slug ?: 'home')->firstOrFail();

        return view('page', compact('page'));
    }

}
