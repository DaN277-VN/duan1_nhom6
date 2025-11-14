<?php 

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/Controller.php';
require_once './controllers/TourCategoryController.php';

// Require toàn bộ file Models
require_once './models/model.php';
require_once './models/TourCategory.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // 1. LIÊN KẾT: Trang Index (Trang chủ)
    '/' => (new TourCategoryController())->index(),

    'tourcategory/index' => (new TourCategoryController())->index(),

    // 2. LIÊN KẾT: Trang Thêm
    'tourcategory/create' => (new TourCategoryController())->create(),

    // 3. XỬ LÝ FORM: Lưu dữ liệu
    'tourcategory/store' => (new TourCategoryController())->store(),
    
    // 4. LIÊN KẾT: Trang Sửa
    'tourcategory/edit' => (new TourCategoryController())->edit(),

    // 5. XỬ LÝ FORM: Cập nhật dữ liệu
    'tourcategory/update' => (new TourCategoryController())->update(),

    // 6. LIÊN KẾT: Xóa
    'tourcategory/delete' => (new TourCategoryController())->delete(),
    
};