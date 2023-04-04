<meta charset="utf8"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<div class="container">
    <form action="kontrol.php" method="post">
        <div class="form-group">
          <label for="username">Kullanıcı Adı:</label>
          <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
          <label for="password">Şifre:</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <?php
        if(isset($_GET["mesaj"])){
          echo "<div class='alert alert-danger'>".$_GET["mesaj"]."</div>";
        }
        ?>
        <button type="submit" class="btn btn-primary">Giriş Yap</button>
      </form>
</div>
  