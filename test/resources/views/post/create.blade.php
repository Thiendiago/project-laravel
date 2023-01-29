<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>them bai viet</h1>
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </div>
    @endif  
    {!! Form::open(['url'=>'post/store','method'=>'POST', 'file' => TRUE]) !!}

    <div class="form-group">
        {!! Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'title']) !!}
        @error('content')
        <small class="form-test test-danger">{{$message}}</small>
        @enderror
    </div>
        <div class="form-group">
        {!! Form::textarea('content', '', ['class'=>'form-control', 'placeholder'=>'content']) !!}
        @error('title')
        <small class="form-test test-danger">{{$message}}</small>
        @enderror
        <!-- <textarea class="form-control" name="content" placeholder="noi dung" id="" cols="30" rows="10"></textarea> -->
        </div>
        <div class="form-group">
        {!! Form::file('file', ['class' => 'form-control-file']) !!}<br>
        <div class="form-group">
        {!! Form::submit('them moi', ['name' => 'sm-add', 'class'=>'btn btn-dark']) !!}
            
        <!-- <input type="submit" name="sm-add"> -->
        </div>
        {!!Form::close() !!}
        </div>
    
</body>
</html>