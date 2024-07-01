<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_name = $_POST["form_name"];
    $form_kana = $_POST["form_kana"];
    $form_email = $_POST["form_email"];
    $form_phone = $_POST["form_phone"];
    $select_item = $_POST["select_item"];
    $form_details = $_POST["form_details"];
    $form_agree = $_POST["form_agree"];
    $errorMessage = '';
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ | HP</title>
  <meta name="direction" content="">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0" />
</head>
<body>

  <!--  ヘッダー&メインイメージ  -->
  <header>
    <div class="header-main">
      <h1 class="header-left">ここには会社名が入ります</h1>
      <div class="header-right">
        <a href="#"><div class="left-btn">ボタン01</div></a>
        <a href="#"><div class="right-btn">ボタン02</div></a>
      </div>
    </div>
    <ul class="header-menu">
      <li class="menu01"><a href="#">メニュー01</a></li>
      <li class="menu02"><a href="#">メニュー02</a></li>
      <li class="menu02"><a href="#">メニュー03</a></li>
    </ul>
  </header>
  <div class="main-image">
    <img src="mv.png" alt="">
  </div>
  <div class="contact">
    <div class="contact-text">
      <h1 class="contact-text-title">お問い合わせ</h1>
      <p class="contact-text-description">お問い合わせや業務内容に関するご質問は、電話またはこちらのお問い合わせフォームより承っております。<br>
      後ほど担当者よりご連絡させていただきます。</p>
    </div>

    <?php
      $switch = 0;
      $missingFields = [];
      $unselectedFields = [];
        if (empty($form_name)) {
          $missingFields[] = 'お名前';
        }
        if (empty($form_kana)) {
          $missingFields[] = 'フリガナ';
        }
        if (empty($form_email)) {
          $missingFields[] = 'メールアドレス';
        }
        if (empty($form_phone)) {
          $missingFields[] = '電話番号';
        }
        if (empty($form_details)) {
          $missingFields[] = 'お問い合わせ内容';
        }
        if (!empty($missingFields)) {
          $switch = 1;
          $errorMessage .= '※以下の必須項目が入力されていません。<br>・' . implode('<br>・', $missingFields). '<br><br>';
        }

        if (empty($select_item)) {
          $unselectedFields[] = 'お問い合わせ項目';
        }
        if (empty($form_agree)) {
          $unselectedFields[] = '個人情報保護方針';
        }
        if (!empty($unselectedFields)) {
          $switch = 1;
          $errorMessage .= '※以下の必須項目が選択されていません。<br>・' . implode('<br>・', $unselectedFields). '<br><br>';
        }
        if (strpos($form_email, '@') === false) {
          $switch = 1;
          $errorMessage .= '※メールアドレスに@が含まれていません。<br><br>';
        }
        if (!preg_match("/^([0-9]{2,4}-[0-9]{2,4}-[0-9]{2,4}|[0-9]{10,11})$/", $form_phone)) {
          $switch = 1;
          $errorMessage .= '※電話番号は10桁または11桁である必要があります。<br><br>';
        }
        if ($errorMessage) {
          echo '<div style="color:red; text-align:center;">' . $errorMessage . '</div>';
        }
    ?>

    <form action=<?php if ($switch === 0){ echo "task8-2.php";} else { echo "task8-1.php";} ?> method="post">
      <div class="contact-form">
        <div class="contacts">
          <label for="form_name">お名前<span class="required">必須</span></label><input type="text" placeholder="山田太郎" id="form_name" name="form_name" value="<?php echo $form_name ?>">
        </div>
        <div class="contacts">
          <label for="form_kana">フリガナ<span class="required">必須</span></label><input type="text" placeholder="ヤマダタロウ" id="form_kana" name="form_kana" value="<?php echo $form_kana ?>">
        </div>
        <div class="contacts">
          <label for="form_email">メールアドレス<span class="required">必須</span></label><input type="text" placeholder="info@fast-creademy.jp" id="form_email" name="form_email" value="<?php echo $form_email ?>">
        </div>
        <div class="contacts">
          <label for="form_phone">電話番号<span class="required">必須</span></label><input type="text" placeholder="000-0000-0000" id="form_phone" name="form_phone" value="<?php echo $form_phone ?>">
        </div>
        <div class="contacts">
          <label for="select_item">お問い合わせ項目<span class="required">必須</span></label>
          <select name="select_item" id="select_item">
            <option value="" hidden>選択してください</option>
            <option value="選択1" <?php if ($select_item === "選択1") {echo "selected";} ?>>選択1</option>
            <option value="選択2" <?php if ($select_item === "選択2") {echo "selected";} ?>>選択2</option>
            <option value="選択3" <?php if ($select_item === "選択3") {echo "selected";} ?>>選択3</option>
          </select>
        </div>
        <div class="contacts">
          <label for="form_details">お問い合わせ内容<span class="required">必須</span></label><textarea rows="6" placeholder="こちらにお問い合わせ内容をご記入ください" id="form_details" name="form_details"><?php echo $form_details ?></textarea>
        </div>
        <div class="contacts">
          <label for="form_agree">個人情報保護方針<span class="required">必須</span></label>
          <div class="form_agree">
            <input type="checkbox" name="form_agree" id="form_agree" value="1" <?php if ($form_agree === "1") {echo 'checked';} ?>>
            <a href="#" target="_blank">個人情報保護方針
              <span class="material-symbols-outlined">tab_group
              <style>.material-symbols-outlined {font-size:16px;}
              </style></span></a>に同意します。
          </div>
        </div>
      </div>
      <div class="form_submit">
        <input type="submit" value=<?php if ($switch === 0){ echo "送信する";} else { echo "確認する";} ?> class="confirmation">
      </div>
    </form>
  </div>

  <!--  リンク  -->
  <div class="links">
    <div class="link-left">
      <div class="link_text">こちらからご購入ください</div>
      <a href="#"><div class="left-btn">ネットショップ</div></a>
    </div>
    <div class="link-right">
      <div class="link_text">お気軽にお問い合わせください</div>
      <a href="#"><div class="right-btn">お問い合わせ</div></a>
    </div>
  </div>

  <!--  フッター  -->
  <footer>
    <div class="company-prof">
      <div class="company-name">ここには会社名が入ります</div>
      <div class="company-address">住所が入ります</div>
      <div class="company-phone">03-1234-5678</div>
      <div class="company-time">営業時間：9:00～18:00</div>
    </div>
    <div class="footer-menu">
      <ul class="footer-links">
        <li class="footer-link01"><a href="#">リンク01</a></li>
        <li class="footer-link02"><a href="#">リンク02</a></li>
        <li class="footer-link03"><a href="#">リンク03</a></li>
        <li class="footer-link04"><a href="#">リンク04</a></li>
        <li class="footer-link05"><a href="#">リンク05</a></li>
        <li class="footer-link06"><a href="#">リンク06</a></li>
      </ul>
      <ul class="footer-links">
        <li class="footer-link07"><a href="#">リンク07</a></li>
      </ul>
    </div>
    <p class="footer-text">ここには会社名が入ります©Copyright.</p>
  </footer>
</body>
</html> 
