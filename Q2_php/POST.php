<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
 <label for="name">Please enter your name: </label> 
 <input name="name" type="text"><br> 
 <label for="age">Please enter your age: </label> 
 <input name="age" type="text"><br> 
 <button type="submit">SUBMIT</button> 
</form> 
<?php
$nm=$_POST['name']; 
$age=$_POST['age']; 
echo "<strong>".$nm." is $age years old.</strong>"; 
?>

</body>
</html>