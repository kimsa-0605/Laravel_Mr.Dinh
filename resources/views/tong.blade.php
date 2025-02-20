<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/asset/css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <form action="/tong" method="post">
        @csrf
        <label for="a">Số a:</label>
        <input type="number" id="a" name="a" required>
        <br>
        <label for="b">Số b:</label>
        <input type="number" id="b" name="b" required>
        <br>
        <button type="submit">Submit</button>
        <br>
        <label for="ketqua">Kết quả:</label>
        <p>{{$total}}</p>
    </form>
</body>
</html>