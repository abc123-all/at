<!-- @extends('dashboard') -->

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin</title>
    <link rel="stylesheet" href="{{ asset('publicExE/css/style.css') }}">
</head>
<body>

<nav>
    <a href="{{ route('indexE') }}">Home</a>
    <a href="{{ route('listE') }}">Danh sách người dùng</a>
</nav>

<div class="container">
    <h2>Màn hình cập nhật</h2>
    <input type="text" value="xxx">
    <input type="password" value="xxx">
    <input type="password" value="xxx">
    <input type="email" value="xxx">
    <button>Cập nhật</button>
</div>

</body>
</html>
