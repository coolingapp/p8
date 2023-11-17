<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $name = "Donald Trump";
        $age = "35";
        $data = [
            'name' => $name,
            'age'  => $age,
            'id'   => $id,
        ];

        $accessToken = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        $cookie = cookie('access_token', $accessToken, $minutes, $path, $domain, $secure, $httpOnly);
        return response($data, 200)->withCookie($cookie);
    }

}
