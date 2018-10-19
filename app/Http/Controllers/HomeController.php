<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteOption;
use Session;

class HomeController extends Controller
{
    public function getIndex(){

    	$options = SiteOption::find(1);
        return view('home.index')->withOption($options);
    }
}
