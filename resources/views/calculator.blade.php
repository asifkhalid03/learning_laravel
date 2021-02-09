<html>
<head>
    <title>Calculator</title>
</head>

<body>

<h1> Sum </h1>

<form method="post" action="/sum">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    Value 1 : <input type="number" name="n1" >
    Value 2 : <input type="number" name="n2" >
    <button type="submit">Sum</button>

</form>

@if(isset($resultOfSum))
    <h2>{{$resultOfSum}} </h2>
@endif




<h1> Subtract </h1>

<form method="post" action="/sub">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    Value 1 : <input type="number" name="n3" >
    Value 2 : <input type="number" name="n4" >
    <button type="submit">Subtraction</button>

</form>




@if(isset($resultOfSub))
<h2>{{$resultOfSub}} </h2>
@endif





</body>

</html>
