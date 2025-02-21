<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <h1>Title</h1>
        @foreach ($dataAPI as $data)
            <li> {{ $data['title'] }}</li>
        @endforeach
    </ul> 
    <ul>
        <h1>Body</h1>
        @foreach ($dataAPI as $data)
            <li>{{ $data['body'] }}</li>
        @endforeach
    </ul>
</body>
</html>