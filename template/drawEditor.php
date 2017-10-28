
<body onload=" InitThis();">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
   <?php 
   include_once 'Classes_drawEdit.php';
   include_once 'DraggableElement.php'; ?>
    <div align="center">
        <canvas id="myCanvas" width="1000" height="200" style="border:2px solid black"></canvas>
        
        <br /><br />

    <script>
    
    var mousePressed = false;
var lastX, lastY;
var ctx;
var tim;
var xPos = myCanvas.width/2;
var yPos = myCanvas.height/2;
var mText = "hi"

function InitThis() {
    ctx = document.getElementById('myCanvas').getContext("2d");

    $('#myCanvas').mousedown(function (e) {
        mousePressed = true;
        Draw(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top, false);
    });

    $('#myCanvas').mousemove(function (e) {
        if (mousePressed) {
            Draw(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top, true);
        }
    });

     $('#myCanvas').mousedown(function (e) {
        mousePressed = true;
        Draws(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top, false);
    });

    $('#myCanvas').mousemove(function (e) {
        if (mousePressed) {
            Draws(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top, true);
        }
    });
    $('#myCanvas').mouseup(function (e) {
        mousePressed = false;
    });
	    $('#myCanvas').mouseleave(function (e) {
        mousePressed = false;
    });
    
    
}

function Draw(x, y, isDown) {
    if (isDown) {
        ctx.beginPath();
        ctx.strokeStyle = $('#selColor').val();
        ctx.lineWidth = $('#selWidth').val();
        ctx.lineJoin = "round";
        ctx.moveTo(lastX, lastY);
        ctx.lineTo(x, y);
        ctx.closePath();
        ctx.stroke();
    }
    lastX = x; lastY = y;
};

function Draws(x, y, isDowns){
     if (isDowns) {
       ctx.beginPath();
      ctx.strokeStyle = $('#selColors').val();  
        ctx.lineJoin = "round";
        ctx.moveTo(lastX, lastY);
        ctx.lineTo(x, y);
        ctx.closePath();
        ctx.stroke();
    }
    lastX = x; lastY = y;
};
 function po() {
 
  ctx.setTransform(1, 0, 0, 1, 0, 0);
  ctx.fillStyle = $('#selColors').val();
    ctx.fillRect(0, 0, ctx.canvas.width, ctx.canvas.height);
  
    }; 	
    
 function pobear() {
  var mText = $('#jr').val();
  var Sfont = $('#fontSize').val();
  
   ctx.font = Sfont + "px Comic Sans MS";
ctx.fillStyle = $('#selColor').val();
ctx.textAlign = "center";
ctx.shadowColor = "black";
ctx.shadowBlur= 0;
ctx.shadow = $('#shadow').val();
    ctx.fillText(mText, ctx.canvas.width/2, ctx.canvas.height/1.5);
     ctx.setTransform(1, 0, 0, 1, 0, 0);
 }
 
 function rect(){
     ctx.rect(220, 30, 220, 100);
     ctx.fillstyle = $('#selColor').val();
     ctx.strokeStyle = $('#selColor').val();
     ctx.lineWidth = "6";
     ctx.stroke();
     
 }
    
function clearArea() {
    // Use the identity matrix while clearing the canvas
    ctx.setTransform(1, 0, 0, 1, 0, 0);
    ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
};


  
</script>
 