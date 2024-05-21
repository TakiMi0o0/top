<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
    $week = array('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日');
  ?>
    <ul>
      <li><?= $week[0] ?></li>
      <li><?= $week[1] ?></li>
      <li><?= $week[2] ?></li>
      <li><?= $week[3] ?></li>
      <li><?= $week[4] ?></li>
      <li><?= $week[5] ?></li>
      <li><?= $week[6] ?></li>
    </ul>
</body>
</html>