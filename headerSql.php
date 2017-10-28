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
           echo '<style> #header { background-color:' . $row["color"]. "; width: " . $row["width"] . "; height:" . $row["height"] . "; border:" . $row["border"] .
                   ";   border-top-left-radius:" . $row["borderRadiusTop"] . ";   border-top-right-radius:" . $row["borderRadiusTop"] . ";}</style><br />";
           $headerImage = $row["height"] - 10;
           echo '<style> #headerImage {height : ' . $headerImage . "px; margin-top: 2px; border: 1px solid black; border-radius: " . $row["borderImageRadius"] . ";}";
           echo ' .headerBackground {background-color: silver; top: 0px;}';
           echo ' #headerName { font-size:' . $row["fontSize"] . ';  text-align:center; alignment-baseline: middle;}';
           echo ' #HeaderLogo {  height:' . $headerImage . 'px; float: right; margin: 0 0 0 10px;}</style>';
       }
   } else {
       echo "0 results";
   }
   $conn->close();
      ?>
