<html>
<head>
    <script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <link href="Style.css" rel="stylesheet" type="text/css"/>
    <link href="tutorial_handler.css" rel="stylesheet" type="text/css"/>
    <style>
#bottomBar {width: 90%; height: 100px; postion: absolute; background-color: black; margin-left: 5%; margin-top: 2%;
 border-radius: 20; text-align: center; box-shadow: 8px 8px 8px black; border-right: 1px solid white;  top: 700px; position: absolute;}
body { background: url(images/floatingBubbles.gif); background-size: 100% 1000px; background-repeat: no-repeat;}
#searchBar {background-color: white;}
#footerID {color: white;}
#searchInput {background-color: black; color: whitesmoke;}
#sidebar {width: 70px; left: 0px; position: absolute; border: 2px solid white; height: 800px;}
#mainBody {margin-left: 70px; height: 800px; position: absolute;}





</style>
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","handler.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body id="myBtn" style="background-color: silver; background-size: 100% 1000px; background-repeat: no-repeat;"  >
    

    
    
    <?php
include_once 'annaPopup.php';

?>
    <div id='sidebar'>
        <div class="elem">
            <div class="axis">
        <a id="EditImages" href='http://localhost/TimsDevelopment/template/anna.php/?action=ImageEditer' target="iframe_a">
            <span class="object rocket move-up" ><h4>click me</h4>this is for resizing and editing images</span>
        <img src="template/images/graffiti.png" alt="" width="70" height="70" />
        </a>
        </div>
        </div>
        
         <div class="elem">
            <div class="axis">
        <a id="DrawEdit" href="http://localhost/TimsDevelopment/template/anna.php/?action=drawEditor" target="iframe_b">
            <span class="object rocket move-up" ><h4>click me</h4>I am for drawing and design for the pages</span>
            <img src="template/images/0001.png" alt=""   width="70" height="70"  />
        </a>
            </div>
         </div>
          
          <div class="elem">
            <div class="axis">
         <a id="About" href="http://localhost/TimsDevelopment/template/anna.php/?action=about" target="iframe_c">
               <span class="object rocket move-up" ><h4>click me</h4>I am about the developer and code</span>
            <img src="template/images/0001.png" alt=""   width="70" height="70" />
        </a>
            </div>
          </div>
        
        <div class="elem">
            <div class="axis">
         <a id="Tutorial" href="http://localhost/TimsDevelopment/template/anna.php/?action=tutorial" target="iframe_d">
               <span class="object rocket move-up" ><h4>click me</h4>I am about the developer and code</span>
            <img src="template/images/0001.png" alt=""   width="70" height="70" />
        </a>
            </div>
          </div>
    </div>
        <script>
  function tutorials() {
    window.open("http://localhost/TimsDevelopment/template/anna.php/?action=ImageEditer", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
}
/** window.onload=tutorial(); **/
    </script>
    
     <a id="Tutorial" href="http://localhost/TimsDevelopment/template/anna.php/?action=tutorial" target="iframe_d">
               <span class="object rocket move-up" ><h4>click me</h4>I am about the developer and code</span>
            <img src="template/images/0001.png" alt=""   width="70" height="70" />
        </a>
    
    
  
    
    <div class="container" id="mainBody">
        <div class="row">
            <div class="col-lg-12">
              
<?php include_once 'ImageCallClick.php'; ?>
<?php include_once 'Tutorial-handler.php'; ?>
              
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    <div class="container" id='bottomBar'id="myBtn">
        <div class="row">
            <div class="col-sm-2">
    <form id="searchBar">
        <label>search <input type="text" size="30" onkeyup="showResult(this.value)" id="searchInput"></label>
<div id="livesearch">
    </form>
</div>
            </div>
            <div class="col-sm-8" id="footerID">
    hello world's
</div>
        </div>
  </div>
</body>
</html>