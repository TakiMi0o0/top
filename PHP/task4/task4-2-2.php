<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
    $random_n = mt_rand(1,12);
    $season = "";
    if ($random_n >= 3 && $random_n < 5) {
      $season = "春";
    } elseif ($random_n >= 6 && $random_n < 8) {
      $season = "夏";
    } elseif ($random_n >= 9 && $random_n < 11) {
      $season = "秋";
    } else {
      $season = "冬";
    }
  ?>
  <h1><?= $random_n ?>月は<?= $season ?>です。</h1>
</body>
</html>