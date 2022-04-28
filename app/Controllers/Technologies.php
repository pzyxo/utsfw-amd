<?php

namespace App\Controllers;

class Technologies extends BaseController
{
    public function index()
    {
        $url = 'http://devel.crissad.com/api/amd';
        $json = file_get_contents($url);
        $json = json_decode($json, true);

        $data =
            [
                "title" => "Technologies",
                "page" => "technologies",
                "json" => $json
            ];

        
        return view('technologies', $data);
    }
}
