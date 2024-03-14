<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>F&G BookStore</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="header">
    <p>F&G BookStore</p>
  </div>
  <nav>
    <ul> <?php include("page/navbar.php") ?> </ul>
  </nav>

  <?php include("content.php") ?>

  <?php include("page/user/keranjang.php") ?>
  <div class="footer">
    <p>Copyright F&G BookStore 2023</p>
  </div>

</body>

</html>