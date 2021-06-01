<?php
use App\Http\Controllers\Api\v1\ApiV1Controller;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/bootstrap3/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 70px">
            <h4> YOUR SHORT URL: <a href={{$domainName}}>{{$domainName}}</a></h4>
        </div>
    </div>
</div>
</body>
</html>
