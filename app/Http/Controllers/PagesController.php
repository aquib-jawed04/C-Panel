<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    Public function index(){
        $title = 'Welcome to Laravel';
        return view('pages.index',compact('title'));
    }

    Public function about(){
        $title = 'Welcome, this is About Page';
        return view('pages.about',compact('title'));
    }

    Public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web design', 'Programming', 'SEO']
        ); 
        return view('pages.services')->with($data);
    }
}
