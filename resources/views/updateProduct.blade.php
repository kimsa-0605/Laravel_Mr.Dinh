<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sửa Sản Phẩm</h2>
        <form action="{{ route('product.update', $product['id']) }}" method="POST">		
            @csrf		
            @method('PUT')			
            <input type="text" placeholder="Tên sản phẩm" name="name" value="{{ $product['name'] }}" required>
            <input type="text" placeholder="Thêm ảnh" name="avatar" value="{{ $product['avatar'] }}"  required>
            <button type="submit" class="btn btn-success">Sửa</button>	
        </form>
    </div>
</body>
</html>
