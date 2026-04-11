<?php

namespace App\Http\Controllers;

use Date;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index() {
        $chirps = [
            [
            'id' => 2,
            'author' => 'Mauro',
            'message' => 'Studying Laravel',
            'time' => '5 minutes ago',
            ],
               [
            'id' => 3,
            'author' => 'Mauro',
            'message' => 'Studying Nuxt',
            'time' => 'Now'
            ],

               [
            'id'=> 1,
            'author' => 'Mauro',
            'message' => 'Studying Vue',
            'time' => '10 minutes ago'
            ],
        ];
        return view('home', ['chirps' => $chirps]);
    }
}
