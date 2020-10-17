<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function getHomePage(){
        $homepagetitle="Home Page";
        $footerText="this is the homepage footer";
        $footertextshow = false;
        $textColor = "red";
        return view('home')
        ->with('title',$homepagetitle)
        ->with('textColor',$textColor)
        ->with('footerText',$footerText)
        ->with('footerController',$footertextshow);
    }
    public function getAboutPage(){
        $homepagetitle="About Page";
        $footerText="this is the homepage footer";
        $footertextshow = True;
        $textColor = "blue";
        return view('about')
        ->with('title',$homepagetitle)
        ->with('textColor',$textColor)
        ->with('footerText',$footerText)
        ->with('footerController',$footertextshow);
    }
    public function getContactPage(){
        $homepagetitle="Contact Page";
        $footerText="this is the homepage footer";
        $footertextshow = True;
        $textColor = "green";
        return view('contact')
        ->with('title',$homepagetitle)
        ->with('textColor',$textColor)
        ->with('footerText',$footerText)
        ->with('footerController',$footertextshow);
    }
}
