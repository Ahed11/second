<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($departments as $department)
        name: {{$department->name}} <br>
        number of department: {{$department->number}} <br>
        floor of department: {{$department->floor}} <br><br>
    @endforeach
</body>
</html>
