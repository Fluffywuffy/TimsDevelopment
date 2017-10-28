


<div id="MyTutorial" class="modal_Tutorial">

  <!-- Modal content -->
  <div class="modal-content-Tutorial">
    <span class="close_Tutorial">&times;</span>

<iframe height="650px" width="100%" src="demo_iframe.htm" name="iframe_d"></iframe>


  </div>
  
</div>

<script>
// Get the modal
var modal_Tutorial = document.getElementById('MyTutorial');

// Get the button that opens the modal
var btn_Tutorial = document.getElementById("Tutorial");

// Get the <span> element that closes the modal
var span_Tutorial = document.getElementsByClassName("close_Tutorial")[0];

// When the user clicks the button, open the modal 
btn_Tutorial.onclick = function() {
    modal_Tutorial.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span_Tutorial.onclick = function() {
    modal_Tutorial.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal_Tutorial) {
        modal_Tutorial.style.display = "none";
    }
}
</script>
