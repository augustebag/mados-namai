<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: url({{ asset('fonts/Roboto-Regular.ttf') }});
        }
        @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: bold;
        src: url({{ asset('fonts/Roboto-Bold.ttf') }});
        }
        body {
            font-family: 'Roboto';
        }
    </style>
</head>
<body>
      <h1>Master: {{$outfit->masterOfOutfit->name}} {{$outfit->masterOfOutfit->surname}}</h1>
                          <div class="form-group">
                        <small class="form-text text-muted">Outfit type: {{$outfit->type}} </small>
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted"><b style="color:{{$outfit->color}};">Color:</b> {{$outfit->color}}</small>
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted">Outfit size: {{$outfit->size}}</small>
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted">About outfit: <div>{!!$outfit->about!!}</div></small>
                    </div>
                    <div class="form-group">                     
                        <small class="form-text text-muted">Master: {{$outfit->masterOfOutfit->name}} {{$outfit->masterOfOutfit->surname}}</small>
                    </div>
</body>
</html>