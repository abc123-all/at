<!-- @extends('dashboard') -->

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết người dùng</title>
    <link rel="stylesheet" href="{{ asset('publicExE/css/style.css') }}">
</head>
<body>

<nav>
    <a href="{{ route('indexE') }}">Home</a>
    <a href="{{ route('logoutE') }}">Đăng xuất</a>
</nav>

<div class="container">
    <h2>Màn hình chi tiết</h2>
    <p><strong>Username:</strong> test1</p>
    <p><strong>Email:</strong> test1@gmail.com</p>
    <button>Chỉnh sửa</button>
</div>

</body>
</html>
