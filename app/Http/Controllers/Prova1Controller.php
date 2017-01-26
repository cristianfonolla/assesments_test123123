<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Prova1Controller extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('prova1',$data);
    }

}
