<?php
   $title = "регестрація";
   require("blocks/header.php");
?>
<?php
$email = $_POST['email'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];

if (trim($user_name) == "")
   echo "ви не ввели імя";
else if (trim($email) == "" || trim($password) == "" || $user_name == "")  
   echo "ви не ввели пароль, email або імя";
else {
   echo "<br>ваш опубліковий запис зарегестровано";}

$password = md5($password);
setcookie("user_name", $user_name, time() + 94670777);
setcookie("email", $email, time() + 94670777);
setcookie("password", $password, time() + 94670777);
?>
<?php
    require("blocks/footer.php")
?>