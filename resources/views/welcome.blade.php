<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Estoy en la pagina de Welcome</title>

</head>

<body>

@include('_partials.lang')
<h1>{{__('welcome.hello')}}.{{$msg}}</h1>

</body>


</html>
