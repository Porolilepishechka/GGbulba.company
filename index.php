<?php
   $title = "головна";
   require("blocks/header.php");
?>
<div class="container mt">
<h1>головна сторінка</h1>
   <form action="register.php" method="post">
   <input type="email" name="email" placeholder="введіть email" class="form-control"><br>
      <input type="text" name="user_name" placeholder="введіть імя" class="form-control"><br>
      <input type="password" name="password" placeholder="введіть пароль" class="form-control"><br>
      <button type="submit" style = "width: 160px; height:40px;" class="btn btn-success">
      <b>зарегеструватися</b>
   </form>
</div>
<?php
   require("blocks/footer.php");
?>
