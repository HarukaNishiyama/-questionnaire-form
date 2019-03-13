<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>PHP基礎</title>
</head>
<body>
  <?php

    $code=$_POST["code"];

    // SQLへの接続
    $dsn='mysql:dbname=phpkiso;host=localhost';
    $user='root';
    $password='';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');

    // SQLへの命令
    $sql='SELECT*FROM anketo WHERE code=?';
    $stmt=$dbh->prepare($sql);
    $data[]=$code;
    $stmt->execute($data);

    // 結果表示
    while(1){
      $rec=$stmt->fetch(PDO::FETCH_ASSOC);
      if($rec==false){
        break;
      }
      echo $rec['code'];
      echo $rec['nickname'];
      echo $rec['email'];
      echo $rec['goiken'];
      echo '<br>';
    }

    // SQL切断
    $dbh=null;
  ?>
    <br>
  <a href="menu.html">メニューに戻る</a>
</body>

</html>