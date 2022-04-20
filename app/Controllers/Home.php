<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() {
        return view('index');
    }

    public function about_us() {
        return view('about-us');
    }

    public function download() {
        return view('download');
    }
    
    public function news() {
        return view('news');
    }
    
    public function fasilitasTIK() {
        return view('fasilitasTIK');
    }
    
    public function infrastrukturTIK() {
        return view('infrastrukturTIK');
    }
    
    public function helpdesk() {
        return view('helpdesk');
    }
    
    public function staffsite() {
        return view('staffsite');
    }
    
     public function studentsite() {
        return view('studentsite');
    }
}
