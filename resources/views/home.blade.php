<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($libs as $lib)
        name: {{$lib->name}} <br>
        dateOfFoundation: {{$lib->dateOfFoundation}} <br>
        address: {{$lib->address}} <br><br>
    @endforeach
</body>
</html>
