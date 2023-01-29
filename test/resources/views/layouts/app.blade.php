<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <div id="wrapper">
        <div class="header">
            <h1>header</h1>
        </div>
        <div id="wp-content">
            <div class="content">
                @yield('content')
            </div>
            <div class="sidebar">
                @yield('sidebar')
            </div>
        </div>
        <div class="footer">
            <h1>footer</h1>
        </div>
    </div>
</body>
</html>