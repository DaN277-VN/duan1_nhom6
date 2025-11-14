<?php
class Model 
{
    protected $conn; 

    public function __construct() 
    {
        $this->conn = connectDB(); 

        // Kiểm tra xem $this->conn có phải là đối tượng PDO hợp lệ không.
        // Nếu không, nó sẽ trả về null (như đã phân tích) và ta dừng lại.
        if (!$this->conn) {
            // Tùy chọn: Dừng lại và báo lỗi để người dùng biết vấn đề
            die("Lỗi: Không thể thiết lập kết nối Database trong Model."); 
        }
        
        // Đoạn code setAttribute() này đã được viết trong connectDB(). 
        // Vì vậy, bạn KHÔNG CẦN nó ở đây nữa. Nếu bạn giữ lại, nó cũng sẽ hoạt động 
        // vì chúng ta đã kiểm tra !$this->conn ở trên.
        // $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
    
}