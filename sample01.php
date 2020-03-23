<?php
include "function.php";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title><?= $title ?></title>
</head>

<body>
  <div class="container">
    <div class="title">
      <h1><?= $title ?></h1>
      <hr>
    </div>


    <aside>
      <div class="describe">
        <h2>Fizz Buzzとは・・・</h2>
        <p>
          ３の倍数のときは、『 Fizz 』<br>
          ５の倍数のときに、『 Buzz 』<br>
          ３と５両方で割り切れるとき（１５で割り切れる場合）は、<br class="sp_br">
          『 Fizz Buzz 』と発言していくゲームです。
        </p>
      </div>
    </aside>

    <section>
      <div class="input">
        <div class="input_form">
          <form action="sample01.php" method="post">
            <p>
              好きな数字を入力してください。<br>
            </p>
            <input type="text" name="num">
            <input type="submit">
          </form>
        </div>

        <div class="input_result">
          <p>
            <?php //入力数字を表示する
            if (isset($num) && !isset($error)) {
              echo $num . "までのゲーム結果を一覧表示します！";
            } ?>
          </p>
        </div>
        <hr>

        <div class="input_result">
          <p>
            <?php //エラーがあったら表示する
            foreach ($error as $g) {
              if (isset($g)) {
                echo $g;
              }
            } ?>
          </p>

          <p>
            <?php //ゲーム結果を表示する
            foreach ($msg as $f) {
              echo $f;
            } ?>
          </p>
        </div>
      </div>
    </section>
  </div>
</body>

</html>