<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>{{ $title }}</h1>

    @foreach($details as $detail)
    <h2>{{ $detail }}</h2>
    @endforeach

    <a href="/more">Try it!</a>
</body>

</html>