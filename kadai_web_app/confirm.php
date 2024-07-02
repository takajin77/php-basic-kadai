<?php
//セッション開始
session_start();
// postリクエストから入力を取得
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];


//エラー
// エラーメッセージを格納する
$errors = []; //空箱
// 名前
if (empty($name)) {
  $errors[] = '名前を入力してください。';
}
//年齢
if (empty($age)) {
  $errors[] = '年齢を入力してください';
} elseif (!is_numeric($age)) {
  $errors[] = '年齢を数値で入力してください。';
}

//エラー終わり

//セッション、クッキー
//セッション変数に保存
if (empty($errors)) {
  $_SESSION['name'] = $name;
  $_SESSION['age'] = $age;
  $_SESSION['department'] = $department;

  // クッキー登録有効期限は1時間
  setcookie('name', $name, time() + 3600);
  setcookie('age', $age, time() + 3600);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>入力内容をご確認ください。</h2>
  <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください</p>
  <table border="1">
    <tr>
      <th>項目</th>
      <th>入力内容</th>
    </tr>
    <tr>
      <td>社員名</td>
      <td><?php echo $name; ?></td>
    </tr>
    <tr>
      <td>年齢</td>
      <td><?php echo $age; ?></td>
    </tr>
    <tr>
      <td>所属部署</td>
      <td><?php echo $department; ?></td>
    </tr>
  </table>
  <p>
    <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
    <button id="cancel-btn" onclick="history.back();">キャンセル</button>
  </p>
  <?php
  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo '<font color="red">' . $error . '</font>' . '<br>';
    } //エラー表示
    // 確定ボタンを無効にするjavascriptコードをブラウザに送信
    echo '<script>document.getElementById("confirm-btn").disabled=true;</script>';
  }
  ?>
</body </html>