//1. C
2. B
3. C
4. B
5. B// 
<?php

// ==========================
// CÂU 1: Số chẵn từ 1 đến 10

echo "Cau 1:<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "<br><br>";
// ==========================
// CÂU 2: Kiểm tra số nguyên tố
echo "Cau 2:<br>";

$n = 17;
$isPrime = true;

if ($n < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}
if ($isPrime) {
    echo $n . " la so nguyen to.";
} else {
    echo $n . " khong phai la so nguyen to.";
}
echo "<br><br>";
// ==========================
// CÂU 3: In hình chữ nhật
echo "Cau 3:<br>";
function inHinhChuNhat($chieuRong, $chieuCao)
{
    for ($i = 1; $i <= $chieuCao; $i++) {
        for ($j = 1; $j <= $chieuRong; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
inHinhChuNhat(5, 3);
?>