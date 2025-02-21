<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/asset/css/nhapSVForm.css')}}">
</head>
<body>
    <form action="/nhapSV" method="post" class="my-form">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
            @error('name') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" class="form-control" name="age">
            @error('age') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" name="date">
            @error('date') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone">
            @error('phone') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label>Web</label>
            <input type="url" class="form-control" name="web">
            @error('web') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address">
            @error('address') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <!-- <div>
            @include('block.error')
        </div> -->
        <button type="submit" class="btn btn-primary" style="left: 200px;">OK</button>
        <div class="display-infor">
            @if (isset($user))
                @foreach ($user as $users) 
                    <div class="display-infor">
                        <p>Name: {{ $users['name'] }}</p>
                        <p>Age: {{ $users['age'] }}</p>
                        <p>Date: {{ $users['date'] }} </p>
                        <p>Phone: {{ $users['phone'] }} </p>
                        <p>Website: {{ $users['web'] }} </p>
                        <p>Address: {{ $users['address'] }} </p>
                    </div>
                @endforeach
            @endif
        @if(session()->has('userSession'))
            <form action="/clear" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Xóa</button>
            </form>
        @endif
    </form>
</body>
</html>