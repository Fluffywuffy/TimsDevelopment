<?php

$x.$tim = "hello world";


for ($x = 1; $x <= 10; $x++) {
    
    $colors = array($x.$tim, "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value <br>";
}
   
    echo "$x <br />";
}

$xmlDoc=new DOMDocument();
$xmlDoc->load("live.xml");

$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
    $z=$x->item($i)->getElementsByTagName('url');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<a href='" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        } else {
          $hint=$hint . "<br /><a href='" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "' >" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}