<!DOCTYPE html>
<html>
<?php
  $name=$_POST["name"];
  $address=$_POST["address"];
  $form=$_POST["form"];

  $name=htmlspecialchars($name);
  $address=htmlspecialchars($address);
  $form=htmlspecialchars($form);
?>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF8">
  <title>送信確認</title>
</head>
  <body>
    <h2>送信内容確認</h2>

      <?php if($name == ""): ?>
        <h1><?php echo "名前が入力されていません" ?></h1>
      <?php else:?>
        <p>お名前：<?php echo $name?></p>
      <?php endif ?>
      <?php if($address == ""): ?>
        <h1>メールアドレスが入力されていません</h1>
      <?php else:?>
        <p>メールアドレス：<?php echo $address?></p>
      <?php endif ?>
      <?php if($form == ""): ?>
        <h1>お問い合わせ内容が入力されていません</h1>
      <?php else:?>
        <p>お問い合わせ内容：<?php echo $form?></p>
      <?php endif ?>
      <?php if($name == '' || $address == '' || $form == '' ):?>
        <input type="button" onclick="history.back()" value="戻る">
      <?php else:?>
        <form action="check.php" method="post">
          <input type="hidden" name="name" value="$name">
          <input type="hidden" name="address" value="$address">
          <input type="hidden" name="form" value="$form">
          <input type="button" onclick="history.back()" value="戻る">
          <input type="submit">
        </form>
      <?php endif ?>
  </body>
</html>