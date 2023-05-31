<?php
/*Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
Công thức tính điểm trung bình = (điểm giữa kỳ * 30%) + (điểm cuối kỳ * 70%)
Điểm trung bình >= 9.0 in ra là hạng "Xuất sắc".
Điểm trung bình >= 7.0 và < 9.0 in ra là hạng "Giỏi"
Điểm trung bình >= 5.0 và < 7.0 in ra là hạng "Khá"
Điểm trung bình < 5.0 in ra là hạng "Trung bình - Yếu"*/

function calculateAverage($diemGiuaKy, $diemCuoiKy) {
    $diemTrungBinh = ($diemGiuaKy * 0.3) + ($diemCuoiKy * 0.7);
    return $diemTrungBinh;
}

function xepHangHocLuc($diemTrungBinh) {
    if ($diemTrungBinh >= 9.0) {
        return "Xuất sắc";
    } elseif ($diemTrungBinh >= 7.0 && $diemTrungBinh < 9.0) {
        return "Giỏi";
    } elseif ($diemTrungBinh >= 5.0 && $diemTrungBinh < 7.0) {
        return "Khá";
    } else {
        return "Trung bình - Yếu";
    }
}

$diemGiuaKy = 8.5;
$diemCuoiKy = 9.0;

$diemTrungBinh = calculateAverage($diemGiuaKy, $diemCuoiKy);
$xepHang = xepHangHocLuc($diemTrungBinh);

echo "Điểm trung bình: " . $diemTrungBinh . "<br>";
echo "Xếp hạng học lực: " . $xepHang;
?>
