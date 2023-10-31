<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Các thẻ meta, title và các tệp CSS khác -->
</head>
<body>
    @include('layouts.header') <!-- Bao gồm header view ở đây -->

    <div class="container">
        @yield('content') <!-- Đây là nơi nội dung chính của trang admin sẽ được hiển thị -->
    </div>

<h1>Đây là phần index</h1>
</body>
</html>
