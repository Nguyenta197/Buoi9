<?php
namespace App\Controllers;

//tạo một phương thức hiện ra màn hình 
// "Chúc mừng năm mới"
class HomeController
{
    public function index()
    {
        // Hiển thị giao diện ở view
        return view('admin.category.index');
    }

    
}