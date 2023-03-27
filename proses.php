<?php
if(isset($_POST['submit'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case '+':
            $hasil = $angka1 + $angka2;
            break;
        case '-':
            $hasil = $angka1 - $angka2;
            break;
        case '*':
            $hasil = $angka1 * $angka2;
            break;
        case '/':
            $hasil = $angka1 / $angka2;
            break;
        default:
            $hasil = "Tidak dapat melakukan operasi aritmatika";
            break;
    }

    echo "Hasil operasi aritmatika dari " . $angka1 . " " . $operator . " " . $angka2 . " adalah " . $hasil;
}
?>