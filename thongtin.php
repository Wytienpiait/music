<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <h2>Cảm ơn bạn đã chia sẻ thông tin</h2>

</head>

<style>
    
  

   h2{
    text-align: center;
   }

   
   

   .khaosat{
    border: unset;
    text-align: center;
    padding: 30px;

    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: 300px;
    margin-right: 300px;
   }

</style>
<body>

<div class="khaosat">

<?php



echo "Tên: " .  $_POST['ten']  .  "<br>";

echo "Ngày sinh: " . $_POST['ngaysinh'] . "<br>";

echo "Giới tính: " . $_POST['gioitinh'] . "<br>";

echo "Nhạc cụ yêu thích: " . $_POST['nhaccu'] . "<br>";

echo "Ca sĩ yêu thích: " . $_POST['casi'] . "<br>";

?>

</div>

  
    
</body>
</html>
    
    
    
    
