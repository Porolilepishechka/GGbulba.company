<!DOCTYPE html>
<html lang="ua">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body> 
<b><a href="index.php">головна</a></b>
<b><a href="page1.php">про сайт</a></b>
<b><a href="page2.php">калькулятор</a></b>
<b><?php echo "  вітаємо " . $_COOKIE['user_name'];?></b>
