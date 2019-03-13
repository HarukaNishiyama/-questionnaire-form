<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>PHP基礎</title>
</head>
<body>
  <?php
    try{
    // SQLへの命令
    $dsn='mysql:dbname=phpkiso;host=localhost';
    $user='root';
    $password='';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');

    // ポスト
    $nickname=$_POST['nickname'];
    $email=$_POST['email'];
    $goiken=$_POST['goiken'];

    // サニタイジング
    $nickname=htmlspecialchars($nickname);
    $email=htmlspecialchars($email);
    $goiken=htmlspecialchars($goiken);
    
    echo $nickname."様<br>";
    echo "ご意見ありがとうございました。<br>";
    echo "頂いたご意見：".$goiken."<br>";
    echo $email."にメールを送りましたのでご確認ください。";

    $mail_sub='アンケートを受け付けました。';
    $mail_body=$nickname.'様へ\nアンケートご協力ありがとうございました。';
    $mail_body=html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
    $mail_head='From: xxx@xxx.co.jp';
    mb_language('Japanese');
    mb_internal_encoding("UTF-8");
    mb_send_mail($email,$mail_sub,$mail_body,$mail_head);

    // SQLへの命令
    $sql='INSERT INTO anketo(nickname,email,goiken)VALUES("'.$nickname.'","'.$email.'","'.$goiken.'")';
    $stmt=$dbh->prepare($sql);
    $stmt->execute();

    $dbh=null;
    }
    catch(Exception $e){
      echo 'ただいま障害により大変ご迷惑をお掛けしております。<br>';
    }

    echo '<a href="menu.html">トップに戻る<a>';
  ?>
</body>

</html>