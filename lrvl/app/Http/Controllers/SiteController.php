<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psr\Log\InvalidArgumentException;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }
}
