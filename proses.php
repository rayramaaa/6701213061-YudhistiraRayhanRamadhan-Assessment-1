$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['hitung'];

switch ($operator) {
  case 'tambah':
    $result = $angka1 + $angka2;
    break;
  case 'kurang':
    $result = $angka1 - $angka2;
    break;
  case 'kali':
    $result = $angka1 * $angka2;
    break;
  case 'bagi':
    $result = $angka1 / $angka2;
    break;
  default:
    echo "Operator yang dimasukkan tidak valid.";
    exit;
}

// Menampilkan hasil operasi matematika
echo "Hasil dari $angka1 $operator $angka2 adalah $result.";