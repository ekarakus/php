
<form action="kaydet.php" method="post">
    <input type="email" name="email" value="<?php 
    if(isset($_COOKIE["email"])) echo $_COOKIE["email"] ?>" />
   <div>
   <label for="hatirla">Beni hatırla</label>
    <input type="checkbox" name="hatirla" id="hatirla">
    </div>
    <button type="sub">Gönder</button>
</form>