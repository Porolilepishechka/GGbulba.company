<?php
   $title = "калькулятор";
   require("blocks/header.php");
?>
<div class="container mt">
<h1>калькулятор</h1>

   <form action="page2.php">
      <input type="number" name="a" placeholder="введіть число" class="form-control">
      <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      <input type="number" name="b" placeholder="введіть друге число" class="form-control"><br>
      <button type="sumbit" style = "width: 100px; height:40px;" class="btn btn-success">
      <b>пощитати</b>
   </form>
</div>
<?php
    $A = $_GET['a'];
    $B = $_GET['b'];
    $result = 0;
    $expression = $A . ' ' . $_GET['operation'] . ' ' . $B . ' = ';
    switch ($_GET['operation']) {
        case '+':
            $result = $A + $B;
            break;
        case '-':
            $result = $A - $B;
            break;
        case '*':
            $result = $A * $B;
            break;  
        case '/':
            if($B == 0){
               echo "<h4>на нуль не ділиться</h4>";
               break;
            }
            if ($B >= 0 || $B <= 0)
               $result = $A / $B;
            break;             
        }
        
        echo "<h4>summa: ". $result."</h4>";  
?>
<?php
   require("blocks/footer.php");
?>