<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function Allcatagori()
    {
    	return view('layoute.pages.allcatagori');
    }
}
