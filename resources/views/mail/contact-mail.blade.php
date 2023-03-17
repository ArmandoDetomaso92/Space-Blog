<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ciao, {{$user_data['name']}} grazie per averci contattato!</h1>


    <p class="fw-bold">Questi sono i dati che hai inserito:</p>
    <ul>
        <li>Nome:{{$user_data['name']}}</li>
        <li>Email:{{$user_data['email']}}</li>
        <li>Messaggio:</li>
    </ul>
        <h5 class="ms-5">{{$user_data['message']}}</h5>
    </h4>

    <p>Il nostro team provvederà a rispondeti il prima possibile.</p>
</body>
</html>