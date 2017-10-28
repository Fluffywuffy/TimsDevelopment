

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
<h1>background images/colors</h1>
<p onclick="myFunction()">floating bubbles</p>
<p onclick="bgiOne()">dragon</p>
<p onclick="model()">model</p>
<p onclick="colorOne()">color</p>
<script>
function myFunction() {
   /* document.body.style.backgroundColor = "blue";*/
   document.body.style.backgroundImage = "url('images/floatingBubbles.gif')";
};
function bgiOne() {
    document.body.style.backgroundImage = "url('images/0001.png')";
};
function model() {
    document.body.style.backgroundImage = "url('template/images/569b93116fe72_m.jpg'";
};
function colorOne() {
    document.body.style.backgroundColor = "skyblue";
};
</script>
  </div>
  
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.ondblclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


