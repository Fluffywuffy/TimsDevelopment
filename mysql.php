<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
           <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $db = 'timmydevelopment';
       // Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $sql = "SELECT * FROM header WHERE uname ='tim'";
   $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
   
   if (mysqli_num_rows($result) > 0){
       while ($row = $result->fetch_assoc()) {
           echo 'color:' . $row["color"]. "-name: " . $row["width"] . " " . $row["height"] . "and border" . $row["border"] . "<br />";
       }
   } else {
       echo "0 results";
   }
   $conn->close();
      ?>
    </body>
</html>
