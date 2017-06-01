<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clock</title>
    <style>
                html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Comic Sans MS';
                background-color: #000;
                color: #ccc;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
    </style>
</head>
<body>

<div class="container">
    <div class="content">
        <img src="{{asset('vendor/booclock/img/logo.png')}}" height="300px" />
        <div class="title">{{ $time }}</div>
    </div>
</div>
</body>
</html>
