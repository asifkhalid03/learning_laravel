<html>
<head>
    <title>This is Subtraction Calculator</title>
</head>

<body>

<h1> Subtraction</h1>

<form method="post" action="/sub">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    Value 1 : <input type="number" name="n1" >
    Value 2 : <input type="number" name="n2" >
    <button type="submit">Subtract</button>

</form>


@if(isset($resultOfSum))
    <h2>{{$resultOfSum}} </h2>
@endif



</body>

</html>
