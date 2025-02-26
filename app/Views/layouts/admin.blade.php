{{-- Đây là file matter layout là file gốc của các giao diện
 mà các giao diện đó được kế thừa từ file matter layout này
  --}}

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    {{-- Đây là nơi để các link css dùng chung --}}
   
  </head>
  <body>
    {{-- Bố cục của giao diện được quy định ở đây --}}
    @include('admin.block.header')
    @include('admin.block.sidebar')

    {{-- Để quy định nơi hiển thị section ta phải sử dụng @yield --}}
    @yield('content')

    @include('admin.block.footer')

    {{-- Các file js dùng chung được gọi ở đây --}}
  </body>
  </html>