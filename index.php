<?php
function random($min, $max){
  return rand($min,$max);
}
    $error='';
    $x='';
    $result='';
    if(isset($_GET['operation'])){
      $x=$_GET['num1'];
      $y=$_GET['num2'];
      $op=$_GET['operation'];
      if(is_numeric($x)&& is_numeric($y)){
        switch($op){
          case'+' : 
            $result=$x+$y;
            break;
          case'-' : $result=$x-$y;
            break;  
          case'*' : $result=$x*$y;
            break; 
          case'/' : $result=$x/$y;
            break;
          case'рандом' : $result= random($x, $y);
            break;     
        }
      }else{
        $error='Enter Number first';
      }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP-Calculator Dulat</title>
</head>
<body>
  <h1><?=$error ?></h1>
  <h1>Сраилов Дулат</h1>
  <form action="" method="get">
    
    <div>
      <label for="num1">Число-1</label>
      <input type="number" name="num1" id="num1" value="<?=$x?>">
    </div>

    <div>
      <label for="num2">Число-2</label>
      <input type="number" name="num2" id="num2" value="<?=$y?>">
    </div>

    <div>
      <label for="result">Результат</label>
      <input type="text" id="result" value="<?=$result?>"disabled>
    </div>

    <div>
      <input type="submit" value="+" name="operation">
      <input type="submit" value="-" name="operation">
      <input type="submit" value="*" name="operation">
      <input type="submit" value="/" name="operation">
      <input type="submit" value="рандом" name="operation">
    </div>  
   
  </form>
</body>
</html>

