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
            <h4>SHORT URL SERVICE</h4>
            <hr>
            <form action='api/v1/save-url' method="post">
                @csrf
                <div class="form-group">
                    <label for="">Pleace insert long Url</label>
                    <input type="text" class="form-control" name="form_long_url" placeholder="Pleace insert long Url">
                    <span style="color: #ff0000">@error('form_long_url'){{$message}} @enderror</span>
                </div>
                <br><br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
