<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<?php
  define("TAX",10);
  $pencil_price = 100;
  $pencil_price_tax = 110;
  $eraser_price = 200;
  $eraser_price_tax = 220;

  $message = "現在、消費税は" . TAX . "％です。<br>" .
             "鉛筆が" . $pencil_price . "円で税込" . $pencil_price_tax . "円です。<br>" .
             "消しゴムが" . $eraser_price . "円で税込" . $eraser_price_tax . "円です。";
?>

  <?= $message ?>
</body>
</html>