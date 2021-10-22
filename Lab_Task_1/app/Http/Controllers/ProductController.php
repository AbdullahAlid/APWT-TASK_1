<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function teams()
    {
        return view('pages.ourteam');
    }
    public function services()
    {
        $data=[
            '1st'=>'Mobile',
            '2nd'=>'Laptop',
            '3rd'=>'Headphone',
            '4th'=>'Smart Watch',
            '5th'=>'Charger'
        ];
        return view('pages.products')->with('data',$data);
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }

}
