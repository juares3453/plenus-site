<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        return view ('pages.index');
    }

    public function about(){
        return view ('pages.about');
    }

    public function jobs(){
        return view ('pages.jobs');
    }

    public function contact(){
        return view ('pages.contact');
    }

}
