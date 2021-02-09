<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculatorController extends Controller
{
    public function main()
    {
        return view('calculator');
    }


    public function sum(Request $request)
    {
        $result  = "Total Value after Sum: " .  strval( $request->n1 + $request->n2);

       return  view('calculator',['resultOfSum'=>$result]);

    }


    public function sub(Request $request)
    {
        $result  = "Total Value after Subtraction: " .  strval( $request->n3 - $request->n4);

        return  view('calculator',['resultOfSub'=>$result]);
    }




}
