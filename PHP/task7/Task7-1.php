<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
    class Staff {
      private $name;
      private $age;
      private $sex;
      private $id;
      private static $count = 0;

      public function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->id = str_pad(++self::$count, '0');
      }

      public function show() {
        printf("(S%04d) %s %d歳 %s性<br>", $this->id, $this->name, $this->age, $this->sex);
      }
    }

    $staff[] = new Staff("佐藤　一郎 ", 31, "男");
    $staff[] = new Staff("山田　花子 ", 25, "女");
    $staff[] = new Staff("鈴木　次郎 ", 27, "男");

      foreach ($staff as $name) {
        $name-> show();
      }
  ?>
</body>
</html>