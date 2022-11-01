<?php

namespace App\Controllers;
class Blog extends BaseController {
    function index(){
        $data['title']      = "This Is Title";
        $data['content']    = "This Is The Contens";
        return view('Blog_View', $data);
    }
}