<!-- @extends('dashboard') -->

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('publicExE/css/style.css') }}">
</head>
<body>
<nav>
    <a href="{{ route('indexE') }}">Home</a>
    <a href="{{ route('loginE') }}">Đăng nhập</a>
    <a href="{{ route('registerE') }}">Đăng ký</a>
</nav>

<div class="container">
    <h2>Màn hình đăng nhập</h2>
    <input type="text" id="username" placeholder="Username">
    <input type="password" id="password" placeholder="Mật khẩu">
    <div>
        <input type="checkbox" id="remember"> Ghi nhớ đăng nhập
    </div>
    <button onclick="validateLogin()">Đăng nhập</button>
    <p id="error-message" style="color: red;"></p> <!-- Hiển thị lỗi -->
</div>

<script>
    function validateLogin() {
        let username = document.getElementById("username").value.trim();
        let password = document.getElementById("password").value.trim();
        let errorMessage = document.getElementById("error-message");

        if (username === "" || password === "") {
            errorMessage.textContent = "Vui lòng nhập đầy đủ thông tin!";
        } else {
            errorMessage.textContent = ""; // Xóa thông báo lỗi nếu hợp lệ
            alert("Đăng nhập thành công!"); // Có thể thay bằng xử lý đăng nhập thật
            window.location.href = "{{ route('listE') }}"; // Chuyển hướng đến trang list
        }
    }
</script>
</body>
</html>
