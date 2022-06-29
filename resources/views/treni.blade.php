<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni</title>
</head>
<body>
@foreach ($treni as $treno)
<div>
    <h4>{{$treno->operatore}}</h4>
    <h2>{{$treno->stazione_di_partenza}}</h2>
    <h2>{{$treno->stazione_di_arrivo}}</h2>
    <h4>{{$treno->orario_partenza}}</h4>
    <h4>{{$treno->orario_arrivo}}</h4>
    <h3>{{$treno->codice_treno}}</h3>
    <h3>{{$treno->numero_carrozze}}</h3>
</div>   
@endforeach
</body>
</html>