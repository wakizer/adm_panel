<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $names=['1','2','3','4','5'];
        $namesAssociative = [
            [
                'name'          =>  'Mark',
                'email'         =>  'santingmark13@gmail.com'
            ],
            [
                'name'          =>  'Kalaso',
                'email'         =>  'kalaso@gmail.com'
            ],
            [
                'name'          =>  'Kalaso2',
                'email'         =>  'kalaso2@gmail.com'
            ]
        ];

        return view('home')->with(['names'=>$namesAssociative]);

        // foreach ($names as $key => $value) {
        //     echo $value;
        // }
    }

}
