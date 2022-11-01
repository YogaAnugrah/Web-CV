<?php
namespace App\Controllers;
class About extends BaseController {
    function index() {
        $data['title']  =  "About Yoga Anugrah";
        return view('Form-Biodata', $data);
    }
}