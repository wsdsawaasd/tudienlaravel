<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class classDictionary extends Controller
{
    public function form(){
        return view("translate");
    }
    public function check(Request $request){
        $translate = $request->English;
        $arr = ["xin ch ao","the gi oi","dong phan","manh"];
        $arr1 = ["hello","world","phandong","manh4"];
        for ($i = 0 ; $i < count($arr);$i++) {
            if ($translate == $arr1[$i]) {
                $x = $arr[$i];
                return view("sub", compact("x"));
            }
        }
        return "khongco";
    }
}
