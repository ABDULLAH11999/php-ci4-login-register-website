<?php

namespace App\Controllers;

class UserController extends BaseController{
public function index(){
    $data['pageTitle'] = 'Home'; 
    return view('home' , $data);
}
public function profile(){
    $data['pageTitle'] = 'Profile'; 
    return view('profile', $data);
}
}

?>