<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 09.01.18
 * Time: 13:58
 */

namespace App\Http\Controllers;


class WelcomeController extends Controller
{
    public function index()
    {
        return view('hello');
    }
}