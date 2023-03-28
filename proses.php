<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $angka_pertama = $_POST['angka_pertama'];
  $angka_kedua = $_POST['angka_kedua'];
  $operator = $_POST['aritmatika'];

  if ($operator === '+') {
    $hasil = $angka_pertama + $angka_kedua;
  } else if ($operator === '-') {
    $hasil = $angka_pertama - $angka_kedua;
  } else if ($operator === '*') {
    $hasil = $angka_pertama * $angka_kedua;
  } else if ($operator === '/') {
    $hasil = $angka_pertama / $angka_kedua;
  } else {
    $output = "Operator tidak valid";
  }

  echo "Hasil dari ".$angka_pertama." ".$operator." ".$angka_kedua." adalah ".$output;
}
?>