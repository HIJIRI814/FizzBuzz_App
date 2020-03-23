<?php
include "function.php";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <form action="sample01.php" method="post">
    好きな数字を入力してください。<br>
    <input type="text" name="num">
    <input type="submit">
  </form>
  <?php if (isset($num) && !isset($error)) { ?>
    <?= $num ?>までのゲーム結果を一覧表示します！
  <?php } ?>

  <hr>

  <?php foreach ($error as $g) {
    if (isset($g)) {
      echo $g;
    }
  } ?>

  <?php foreach ($msg as $f) {
    echo $f;
  } ?>
</body>

</html>