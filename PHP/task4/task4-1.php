<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
    $random_n = mt_rand(1,100);
    if ($random_n <= 5) {
      $random_n = "大凶";
    } elseif ($random_n <= 20 ) {
      $random_n = "凶";
    } elseif ($random_n <= 50 ) {
      $random_n = "𠮷";
    } elseif ($random_n <= 80 ) {
      $random_n = "中𠮷";
    } else {
      $random_n = "大𠮷";
    }
  ?>
  <h1>今日の運勢は"<?= $random_n ?>"です。</h1>
</body>
</html>