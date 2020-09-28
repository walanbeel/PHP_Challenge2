<?php
include("config.inc.php");

$pdo = new PDO($dsn,$username,$password,$options);

$stmt = $pdo->query("select * from students"); 
 while($row=$stmt->fetch()){
     echo $row['stu_name']."<br>";
 }

 
?>

 
<?php 
try { 
	$pdo = new PDO($dsn,$username,$password,$options); 
				
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  
						
} 
catch (PDOException $r) { 
	die(" Could not connect. ".$r->getMessage()); 
} 

try { 
    $stmt = 'insert into students (stu_name,stu_phone, stu_address) 
		 values("soha", "771509015", "Aden"),  
		    	("Rana", "77777777", "Dhamer") '; 
	$pdo->exec( $stmt); 
	echo "Records inserted successfully."; 
} 
catch (PDOException $r) { 
	die("insert Could not able to execute  $stmt. ".$r->getMessage()); 
			
} 
unset($pdo); 
?>



<?php
try{ 
	$pdo = new PDO($dsn,$username,$password,$options); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  
						
} catch(PDOException $r){ 
	die("Could not connect. " . $r->getMessage()); 
				
} 

try{ 
    $stmt = 'update students set stu_address="Abb" where id="2"'; 
	$pdo->exec( $stmt); 
	echo "Records was updated successfully."; 
} catch(PDOException $r){ 
	die(" update Could not able to execute $stmt. ". $r->getMessage());  
								
} 
unset($pdo); 
?> 




<?php
try{ 
    $pdo = new PDO($dsn,$username,$password,$options); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  
                         
} catch(PDOException $r){ 
    die("database Could not connect. " . $r->getMessage()); 
} 
  
try{ 
    $stmt = 'delete from students where id="3"'; 
    $pdo->exec($stmt); 
    echo "Record was deleted successfully."; 
} catch(PDOException $r){ 
    die("delete Could not able to execute $stmt. ". $r->getMessage());  
                                
} 
unset($pdo); 
?>
