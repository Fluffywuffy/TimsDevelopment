<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!-- The Modal -->
<div id="MyEditImages" class="modals">

  <!-- Modal content -->
  <div class="modal-contents">
    <span class="closes">&times;</span>

<iframe height="650px" width="100%" src="demo_iframe.htm" name="iframe_a"></iframe>

  </div>
  
</div>

<script>
// Get the modal
var modals = document.getElementById('MyEditImages');

// Get the button that opens the modal
var btns = document.getElementById("EditImages");

// Get the <span> element that closes the modal
var spans = document.getElementsByClassName("closes")[0];

// When the user clicks the button, open the modal 
btns.onclick = function() {
    modals.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spans.onclick = function() {
    modals.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modals) {
        modals.style.display = "none";
    }
}
</script>


<div id="MyDrawEdit" class="modal_Draw">

  <!-- Modal content -->
  <div class="modal-content-Draw">
    <span class="close_Draw">&times;</span>

<iframe height="650px" width="100%" src="demo_iframe.htm" name="iframe_b"></iframe>


  </div>
  
</div>

<script>
// Get the modal
var modal_Draw = document.getElementById('MyDrawEdit');

// Get the button that opens the modal
var btn_Draw = document.getElementById("DrawEdit");

// Get the <span> element that closes the modal
var span_Draw = document.getElementsByClassName("close_Draw")[0];

// When the user clicks the button, open the modal 
btn_Draw.onclick = function() {
    modal_Draw.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span_Draw.onclick = function() {
    modal_Draw.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal_Draw) {
        modal_Draw.style.display = "none";
    }
}
</script>


<div id="MyAbout" class="modal_About">

  <!-- Modal content -->
  <div class="modal-content-About">
    <span class="close_About">&times;</span>

<iframe height="650px" width="100%" src="demo_iframe.htm" name="iframe_c"></iframe>


  </div>
  
</div>

<script>
// Get the modal
var modal_About = document.getElementById('MyAbout');

// Get the button that opens the modal
var btn_About = document.getElementById("About");

// Get the <span> element that closes the modal
var span_About = document.getElementsByClassName("close_About")[0];

// When the user clicks the button, open the modal 
btn_About.onclick = function() {
    modal_About.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span_About.onclick = function() {
    modal_About.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal_About) {
        modal_About.style.display = "none";
    }
};
</script>


