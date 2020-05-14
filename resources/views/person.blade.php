<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ФУТБОЛЬНІ КЛУБИ</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Roboto', sans-serif;
            font-weight: 200;
            margin: 0;
            padding: 0;
        }
        .header {
            width: 100%;
            height: 100px;
            background: #394648;
            margin: 0;
        }
        .header_t {
            font-family: Roboto;
            font-style: normal;
            font-weight: normal;
            font-size: 48px;
            line-height: 100px;
            color: #FFFFFF;
            margin: 0;
        }
        .flex-box {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 800px;
            margin-top: 50px;
        }
        .flex {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .names {
            font-family: Roboto;
            font-style: normal;
            font-weight: normal;
            font-size: 48px;
            line-height: 56px;
            color: #042A2B;
        }
    </style>
</head>
<body>
    <header class="header flex">
        <h1 class="header_t">{{$name}}</h1>
    </header>
    <div class="flex">
        <div class="flex-box">
            @foreach($positions as $position)
                <a href="../position/{{$position->id}}" class="names">{{$position->name}}</a>
            @endforeach
        </div>
    </div>
</body>
</html>
