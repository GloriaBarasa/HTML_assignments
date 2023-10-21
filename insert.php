<!doctype html>
<html>
 <head>
 <h1>insert data into our table</h1>
 </head>
 <body>
 <center>
 <?php
 //call your database file into the current file 
 require "dbconnect.php";
 //pick data from the user
 $firstname = $_REQUEST['first_name']; 
 $lastname = $_REQUEST['last_name'] ; 
 $gender = $_REQUEST['gender'];
 $address = $_REQUEST['address'] ; 
 
 //insert data picked into the table
 $sql = "insert into staff values('$firstname', '$lastname', '$gender', '$address')"; 
 if($conn -> query($sql) === true) {
 echo " records inserted" ;
 }else {
 echo "error";
 }
 ?>
 </center>
 </body>
</html>
