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
  <h2>メール送信完了</h2>
    <?php echo $name."様、お問い合わせありがとうございます。"?>
    <p>1営業日以内にご返信が無い場合はもう一度お問い合わせください。</p>
  <a href="mail.php"><p>戻る</p></a>
</body>

</html>