<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showForm()
    {
        //code untuk meload data yg akan dimuat di form
        return view('showgreetings');
    }

    function showEts()
    {
        //code untuk meload data yg akan dimuat di form
        return view('ets');
    }

    function showHtml(){
        return view('tugas_php_html');
    }

    function showPhp(){
        return view('glbb');
    }
}
