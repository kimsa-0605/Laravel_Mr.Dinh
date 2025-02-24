<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header button {
            padding: 8px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        .actions a {
            margin: 3px;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }
        .edit {
            background-color: #ffc107;
            color: black;
        }
        .delete {
            background-color: #dc3545;
            color: white;
        }
        .status {
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }
        .in-stock {
            background-color: #28a745;
        }
        img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Quản lý sản phẩm</h2>
            <a href="{{route('product.create')}}">Thêm sản phẩm</a>
        </div>
        @if(session('success'))	
            <div class="alert alert-success">{{ session('success') }}</div>	
        @endif	
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $pr )
                    <tr>
                        <td>{{ $pr['id'] }}</td>
                        <td>{{ $pr['name'] }}</td>
                        <td><img src="{{ $pr['avatar'] }}" alt="Rudy West"></td>
                        <td>
                            <!-- /product/5/edit -->
                            <a href="{{ route('product.edit', $pr['id']) }}" class="btn btn-warning">Sửa</a>	
                            <!-- /product/5/destroy --> 						
                            <form action="{{ route('product.destroy', $pr['id']) }}" method="POST">							
                                @csrf							
                                @method('DELETE')							
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Xóa sản phẩm này?')">Xóa</button>							
                            </form>							
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>