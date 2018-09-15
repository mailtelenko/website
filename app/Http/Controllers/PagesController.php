<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
    public function getIndex(){
        return view('welcome')->withTitle('Home');
    }
    
    public function getAbout(){
        return view('about')->withTitle("About");
    }
    
    public function getAdmin(){
        return view('/lumino/index');
    }
    
    public function getAdminPost(){
        return view("/lumino/posts");
    }
    
    public function getAdminUser(){
        return view("/lumino/users");
    }
    
    public function getAdminSettings(){
        return view("/lumino/settings");
    }

    public function getPosts(){
        return view("/posts")->withTitle("Posts");
    }
    
    public function getContact(){
        return view("/contact")->withTitle("Contact");
    }
    
    public function error404(){
        return view("/errors/error404")->withTitle("Error!");
    }
    
    public function getRegister(){
        return view("/auth/newRegister")->withTitle("Register");
    }
    
}
