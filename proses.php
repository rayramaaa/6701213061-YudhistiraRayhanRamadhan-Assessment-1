<?php
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['hitung'];


if ($operator == 'tambah') {
  $result = $angka1 + $angka2;
} elseif ($operator == 'kurang') {
  $result = $angka1 - $angka2;
} elseif ($operator == 'kali') {
  $result = $angka1 * $angka2;
} elseif ($operator == 'bagi') {
  $result = $angka1 / $angka2;
} else {
  echo "Operator yang dimasukkan tidak valid.";
  exit;
}

// Menampilkan hasil operasi matematika
echo "Hasil dari $angka1 $operator $angka2 adalah $result.";
?>