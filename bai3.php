<?php
//cau3. Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
function checkYearEvenOdd($year) {
    if ($year % 2 == 0) {
        return "even year";
    } else {
        return "odd year";
    }
}

$currentYear = date("Y");
$result = checkYearEvenOdd($currentYear);

echo "The current year ($currentYear) is the year $result";
?>

