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
        $result  = "Total Value is: " .  strval( $request->n1 + $request->n2);

       return  view('calculator',['resultOfSum'=>$result]);

    }


    


}
