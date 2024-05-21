<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
    $a = array('name' => '鉛筆','price' => '100円','price_tax' => '110円');
    $b = array('name' => '消しゴム','price' => '200円','price_tax' => '220円');
    $c = array('name' => '定規','price' => '300円','price_tax' => '330円');
  ?>
  <table>
    <tr>
      <th>商品</th>
      <th>価格</th>
      <th>税込価格</th>
    </tr>
    <tr>
      <td><?= $a['name'] ?></td>
      <td><?= $a['price'] ?></td>
      <td><?= $a['price_tax'] ?></td>
    </tr>
    <tr>
      <td><?= $b['name'] ?></td>
      <td><?= $b['price'] ?></td>
      <td><?= $b['price_tax'] ?></td>
    </tr>
    <tr>
      <td><?= $c['name'] ?></td>
      <td><?= $c['price'] ?></td>
      <td><?= $c['price_tax'] ?></td>
    </tr>
  </table>

</body>
</html>