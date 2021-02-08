<?php

namespace App\Http\Controllers;

use App\car;
use Illuminate\Http\Request;
use DB;

class htmlBodyController extends Controller
{

    public function mainPage()
    {


        return view('first_html_page');
    }




    public function getCars()
    {


        $cars = DB::table('cars')->get();



        return view('first_html_page',['myCars'=>$cars]);
    }


}
