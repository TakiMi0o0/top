<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <h1>九九の計算</h1>
  <table>
    <?php
      for($i = 1; $i <=9; $i++){
        echo '<tr>';
        for($n = 1; $n <= 9; $n++){
            $ans = $i * $n;
            echo '<td>'. $i. ' × '. $n. ' = '. $ans. '　</td>';
        }
        echo '</tr>';
      }
    ?>
  </table>
</body>
</html>