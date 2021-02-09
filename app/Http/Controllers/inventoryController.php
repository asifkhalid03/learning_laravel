<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inventoryController extends Controller
{
    public function main()
    {
        return view('inventoryTable');
    }

    public function  insertData(Request $request)
    {

        $tempInventoryData['itemName'] = $request->itemName;
        $tempInventoryData['itemQuantity'] = $request->itemQuantity;
        $tempInventoryData['itemPrice'] = $request->itemPrice;

        $inventoryData[] = $tempInventoryData;


        return view('inventoryTable',['inventoryData'=>$inventoryData]);

    }
}
