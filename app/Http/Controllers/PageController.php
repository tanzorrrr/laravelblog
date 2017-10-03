<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.09.2017
 * Time: 12:40
 */

namespace App\Http\Controllers;
use App\Post;


class PageController extends Controller
{
    public function getIndex(){
        $posts =Post::orderBy('created_at','desc')->limit(4)->get();
        return view('pages.index')->withPosts($posts);
    }

    public function getAbout(){
        $name ="Alex";
        $sername = "Tukhovsky";
        $fullname =$name." ".$sername;
        $email ="alexx1984@ukr.net";
        $data =[];
        $data['email']=$email;
        $data['fullname']=$fullname;
        return view('pages.about')->withData($data);
    }
    public function getContact(){
        return view('pages.contact');
    }

    public function postContact(){

    }

    public function getCategory()
    {

        return view('pages.postcategory');
    }
}