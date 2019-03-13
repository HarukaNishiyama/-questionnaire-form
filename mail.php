<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>メールフォーム</title>
  </head>
  <body>
    <form action="send.php" method="post">
      <p>名前：</p>
      <input type="text" name="name">
      <p>メールアドレス：</p>
      <input type="text" name="address">
      <p>問い合わせ内容：</p>
      <textarea name="form" id="" cols="30" rows="10"></textarea>
      <p></p>
      <input type="submit" >    
    </form>
  </body>

</html>