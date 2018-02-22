<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 22.02.18
 * Time: 15:02
 */

namespace App\Http\Controllers\Front;

use App\Http\Controllers\FrontController;

class ContactController extends FrontController
{
    public function __invoke()
    {
        return $this->view('contact');
    }
}