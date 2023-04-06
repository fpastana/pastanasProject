<?php

namespace App\Http\Controllers\Tests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use fpastana\Numbers;

class NumbersController extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->initialNumber) && isset($request->finalNumber)) {
            $randomNumbers = new Numbers($request->initialNumber, $request->finalNumber);
        } else {
            $randomNumbers = new Numbers();
        }


        dd($randomNumbers->myShuffle());
    }
}
