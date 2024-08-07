<?php
require_once('common.php');
// var_dump($_POST);
// exit;
if (isset($_POST["status"])) {
  session_start();
  if (isset($_POST["id"])) {
    $id = $_POST["id"];
  }
  if (isset($_POST["name"])) {
    $name = $_POST["name"];
  }
  if (isset($_POST["age"])) {
    $age = $_POST["age"];
  }
  if (isset($_POST["work"])) {
    $work = $_POST["work"];
  }
  if (isset($_POST["old_id"])) {
    $old_id = $_POST["old_id"];
  }
  if ($_POST["status"] == "create") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['work'] = $_POST['work'];
    if (check_input($id, $name, $age, $work, $error) == false) {
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    if ($db->idexist($id) == true) {
      $error = "既に使用されているIDです";
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    if ($db->createsyain($id, $name, $age, $work) == false) {
      $error = "DBエラー";
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    header("Location: index.php");
    exit();
  }
  if ($_POST["status"] == "update") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['work'] = $_POST['work'];
    if (check_input($id, $name, $age, $work, $error) == false) {
      header("Location: syain_update.php?error={$error}");
      exit();
    }
    if ($db->idexist($id) == true && $id != $old_id) {
      $error = "既に使用されているIDです";
      header("Location: syain_update.php?error={$error}");
      exit();
    }
    if ($db->updatesyain($id, $name, $age, $work, $old_id) == false) {
      $error = "DBエラー";
      header("Location: syain_update.php?error={$error}");
      exit();
    }
    header("Location: syain_edit.php?id={$id}");
    exit();
  }
  if ($_POST["status"] == "delete") {
    if ($db->deletesyain($id) == false) {
      $error = "DBエラー";
      header("Location: syain_edit.php?id={$id}");
      exit();
    }
    header("Location: index.php");
    exit();
  }
}