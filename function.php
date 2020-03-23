<?php
$title = "Fizz Buzz Game";


$num = mb_convert_kana($_POST['num'], "n");

if (!is_numeric($num)) {
  $error[] = "数字を入力してください！";
} elseif ($num <= 0) {
  $error[] = "１より大きい数字を入力してください！";
}

for ($i = 1; $i <= $num; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    $msg[] = "fizz buzz<br>\n";
  } elseif ($i % 3 == 0) {
    $msg[] = "fizz<br>\n";
  } elseif ($i % 5 == 0) {
    $msg[] = "buzz<br>\n";
  } else {
    $msg[] = $i . "<br>\n";
  }
}
