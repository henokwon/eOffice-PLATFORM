<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h5>{{$data->name}}</h5>
    <h5>{{$data->description}}</h5>
    <iframe src="/assets/{{$data->file}}" ></iframe>
</body>
</html>