<html>
<head>
    <title>Title of the document</title>
</head>

<body>


@foreach($myCars as $singleCar)
<h1>ID is {{ $singleCar->car_id }} and name is {{$singleCar->car_name}}</h1>
@endforeach

<p>This is a paragraph.</p>
</body>

</html>
