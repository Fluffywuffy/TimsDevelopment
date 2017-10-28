<link href="style/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */$color = 'style/ImageEditor.css';
   $jcolor = "style/jquery-ui-1.8.7.custom.css";
   $Hcolor = '../template/style/header.css';
   $bootColor = "style/bootstrap.min.css";
   
   
   $jscript = "js/jquery-ui-1.8.7.custom.min.js";
   $jsScript = "js/jquery-1.4.4.min.js";
   $JbootScript = "js/bootstrap.min.js";
    
echo '<style>';
include_once ($color);
include_once ($jcolor);
include_once ($Hcolor);
include_once ( $bootColor);
echo '</style>';
echo '<script>';
include_once ($jsScript);
include_once ($jscript);
include_once ($JbootScript);
echo '</script>';
include("header.php"); 
include_once 'menu.php';
if (!empty($_GET['action'])){
$action = $_GET['action']; 
$action = basename($action); 
 if (!file_exists("$action.php"))
 if ($action == 'header' || $action == "footer")
    $action = "index";
include_once("$action.php");
} else {
    include ('index.php');
}
include_once("footer.php");
?>

<?php

echo "hello anna";



        
        ?>