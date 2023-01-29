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
    {!! Form::open(['url'=>'user/store','method'=>'POST' ]) !!}
    <div class="form-group">
        {!! Form::label('username', 'ten dang nhap') !!}
        {!! Form::text('username', '', ['class'=>'form-control', 'placeholder'=>'title']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('password', 'mat khau') !!}
        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'password']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('email', 'email') !!}
        {!! Form::email('email', '',['class'=>'form-control','', 'placeholder'=>'email']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('city', 'thanh pho') !!}
        {!! Form::select('city', [0=>'chon', 1=>'ha noi', 2=>'da nang', 3=>'HCM'],'',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('gender', 'gioi tinh') !!}
        <div class="form-check">
        {!! Form::radio('gender', 'male', '',['class'=>'form-check-input', 'id'=>'male']) !!}
        {!! Form::label('male', 'nam', ['class'=>'form-check-label']) !!}
        </div>
        <div class="form-check">
        {!! Form::radio('gender', 'female', 'check',['class'=>'form-check-input', 'id'=>'female']) !!}
        {!! Form::label('female', 'nu', ['class'=>'form-check-label']) !!}
        </div>
        </div>
        <div class="form-group">
        {!! Form::label('birth', 'ngay sinh') !!}
        {!! Form::date('birth','',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
        {!! Form::submit('dang ki', ['name' => 'sm-reg', 'class'=>'btn btn-dark']) !!}
            
        <!-- <input type="submit" name="sm-add"> -->
        </div>
        {!!Form::close() !!}
        </div>
    
</body>
</html>