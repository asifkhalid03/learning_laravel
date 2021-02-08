<html>
<head>
    <title>Title of the document</title>
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





</body>

</html>
