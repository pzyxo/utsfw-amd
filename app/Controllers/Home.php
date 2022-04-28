<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = 
        [
            'title' => "AMDUT - Your Choosen Graphics Card Because of Poor",
            'page' => '',
        ];
        return view('index', $data);
    }
}
