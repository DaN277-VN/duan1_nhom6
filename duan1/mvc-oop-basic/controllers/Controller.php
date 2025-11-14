<?php
// Đây là lớp cơ sở mà tất cả các Controller khác sẽ kế thừa
class Controller 
{
    // Định nghĩa phương thức render() ở đây
    public function render($view, $data = []) 
    {
        extract($data);

        // Đường dẫn đến thư mục views/ của bạn
        $viewPath = "views/" . $view . ".php"; 

        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            // Tùy chọn: Xử lý lỗi nếu file view không tồn tại
            die("Lỗi: Không tìm thấy file view: " . $viewPath);
        }
    }
}