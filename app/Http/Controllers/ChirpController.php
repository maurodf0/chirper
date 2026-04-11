<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller {
    /**
     * Display a listing of the resource.
     */
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


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
