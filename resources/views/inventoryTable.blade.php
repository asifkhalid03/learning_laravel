<html>
<head>
    <title>Inventory Table</title>

    <style>


        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }


    </style>

</head>

<body>

<center>

<form action="/inventory/insert-data" method="post">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <h1>Insert Data</h1>
    <table >
        <tr>
            <th>Item Name</th>
            <th>Item Quantity</th>
            <th>Item Price</th>
        </tr>

        <tr>


            <td> <input type="text" name="itemName" required> </td>
            <td> <input type="number" name="itemQuantity" required> </td>
            <td> <input type="number" name="itemPrice" required> </td>
        </tr>

        <tr>
            <td colspan="3" align="right"> <button type="submit"> Insert</button> </td>
        </tr>

    </table>



</form>


{{--    {{dd($inventoryData)}}--}}


<h2>Inventory System</h2>
 <br>
 <br>
    <table >
        <tr>
            <th>#</th>
            <th>Item Name</th>
            <th>Item Quality</th>
            <th>Item Price</th>
        </tr>

        @if(isset($inventoryData))

            @foreach($inventoryData as $list)

            <tr>
            <td>1</td>
            <td><?php echo $list['itemName'] ?></td>
            <td> {{$list['itemQuantity']}} </td>
            <td> {{$list['itemPrice']}} </td>
            </tr>

            @endforeach

            @else
            <tr>
                <td colspan="4" align="center"> No Data</td>
            </tr>
        @endif

    </table>


</center>

</body>

</html>
