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
      protected $name;
      protected $age;
      protected $sex;
      protected $id;
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

    class PartStaff extends Staff {
      private $jikyu;
      public function __construct($name, $age, $sex, $jikyu) {
        parent::__construct($name, $age, $sex);
        $this->jikyu = $jikyu;
      }

      public function show() {
        printf("(P%04d) %s %d歳 %s性 時給：%d円<br>", $this->id, $this->name, $this->age, $this->sex, $this->jikyu);
      }
    }

    $staff[] = new Staff("佐藤　一郎 ", 31, "男");
    $staff[] = new Staff("山田　花子 ", 25, "女");
    $staff[] = new Staff("鈴木　次郎 ", 27, "男");
    $staff[] = new PartStaff("田中　友子 ", 24, "女", 900);
    $staff[] = new Staff("中村　三郎 ", 27, "男");

      foreach ($staff as $name) {
        $name-> show();
      }
  ?>
</body>
</html>