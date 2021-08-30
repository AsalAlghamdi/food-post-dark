<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DishesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    function getData() {
        $file = file_get_contents(base_path('resources/dishes.json'));
        return $file;
    }
}
