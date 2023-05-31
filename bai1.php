<?php
//Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        return "The number $number is an even number";
    } else {
        return "The number $number is odd";
    }
}

$myNumber = 10;
$result = checkEvenOdd($myNumber);
echo $result;
?>
