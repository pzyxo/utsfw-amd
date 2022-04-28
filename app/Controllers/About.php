<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = 
        [
            'title' => "About Us",
            'page' => '',
        ];
        
        return view('about', $data);
    }
}
