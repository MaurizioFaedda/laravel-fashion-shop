<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Hello</h1>
        @foreach ($dresses as $dress)
            <p>{{ $dress->brand}} </p>
        @endforeach
    </body>
</html>
