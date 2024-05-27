<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <style>
    #item_table{
      text-align: center;
    }
    </style>
    <table id="item_table" border="1" style="border-collapse: collapse">

    <tr>
      <th>商品</th>
      <th>価格</th>
      <th>税込価格</th>
    </tr>

    <?php
      $a = array(name => '鉛筆', price => '100円', price_tax => '110円');
      $b = array(name => '消しゴム', price => '200円', price_tax => '220円');
      $c = array(name => '定規', price => '300円', price_tax => '330円');
    ?>
    
    <tr>
      <?php
        foreach ($a as $name) {
          echo '<td>'.$name.'</td>';
        }
      ?>
    </tr>
    <tr>
      <?php
        foreach ($b as $name) {
          echo '<td>'.$name.'</td>';
        }
      ?>
    </tr>
    <tr>
      <?php
        foreach ($c as $name) {
          echo '<td>'.$name.'</td>';
        }
      ?>
    </tr>
  </table>
</body>
</html>