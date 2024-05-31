<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
    $a = array('name' => '鉛筆','price' => 100);
    $b = array('name' => '消しゴム','price' => 200);
    define("TAX",1.1);
  ?>
  <table>
    <tr>
      <th>商品</th>
      <th>価格</th>
      <th>税込価格</th>
      <th>1Dzの価格</th>
    </tr>
    <tr>
      <td><?= $a['name'] ?></td>
      <td><?= $a['price'] ?>円</td>
      <td><?= $a['price'] * TAX ?>円</td>
      <td><?= $a['price'] * TAX * 12 ?>円</td>
    </tr>
    <tr>
      <td><?= $b['name'] ?></td>
      <td><?= $b['price'] ?>円</td>
      <td><?= $b['price'] * TAX ?>円</td>
      <td><?= $b['price'] * TAX * 12 ?>円</td>
    </tr>
  </table>
  <p>消費税は10％です。</p>

</body>
</html>