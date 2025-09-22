<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function about()
    {
        $adress= "Main street, 15";
        $data = ['name' => 'John', 'phone'=> '8938757634', 'age' => 25];
        return view('about', compact('adress', 'data'));
    }
    public function contacts()
    {
        return view('contacts');
    }
}
