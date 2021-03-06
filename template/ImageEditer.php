<html lang="en"><head>
		<meta charset="utf-8">
		<title>Canvas Image Editor</title>
          
             <link href="ImageEditor.css" rel="stylesheet" type="text/css"/>
                <link href="style/image-editor.css" rel="stylesheet" type="text/css"/>
                <link href="style/jquery-ui-1.8.7.custom.css" rel="stylesheet" type="text/css"/>
       
        <style>
            
        </style>
	</head>
	<body style="">

            <?php  
           include_once 'Classes_ImageEdit.php';
           include_once 'DraggableElement.php'; 
          ?>
    
    	<div id="imageEditor">
        	<section id="editorContainer">
		    	<canvas id="editor" width="480" height="480"></canvas>
            </section>
            <section id="toolbar">
            	<a id="save" href="#" title="Save">Save</a>
                <a id="rotateL" href="#" title="Rotate left">Rotate Left</a>
                <a id="rotateR" href="#" title="Rotate right">Rotate Right</a>
                <a id="resize" href="#" title="Resize">Resize</a>
                <a id="greyscale" href="#" title="Convert to grayscale">B&amp;W</a>
                <a id="sepia" href="#" title="Convert to sepia tone">Sepia</a>
            </section>
        </div>
	<?php 
        $files = glob("../images/*.*");
     for ($i=0; $i<count($files); $i++)
      {
        $image = $files[$i];
        $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png'
         );
        echo basename("'../images/'$image");
        
        $tim = "'../images/569b93116fe72_m.jpg'";
        ?>
            <script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
            <script src="js/jquery-ui-1.8.7.custom.min.js" type="text/javascript"></script>
		<script>
			(function($){
				
				//get canvas and context
				var editor = document.getElementById("editor"),
					context = editor.getContext("2d"),
					
					//create/load image
					image = $("<img/>", {
						src: <?php echo $tim; ?>,
						load: function() {
							context.drawImage(this, 0, 0);	
						}
					}),
				
					//toolbar functions
					tools = {
						
						//output to <img> 
						save: function() {
							
							var saveDialog = $("<div>").appendTo("body");
							
							$("<img/>", {
								src: editor.toDataURL()
							}).appendTo(saveDialog);
							
							saveDialog.dialog({
								resizable: false,
								modal: true,
								title: "Right-click and choose 'Save Image As'",
								width: editor.width + 35
							});
						},
						rotate: function(conf) {
							
							//save current image before rotating
							$("<img/>", {
								src: editor.toDataURL(),
								load: function() {
									//rotate canvas
									context.clearRect(0, 0, editor.width, editor.height);							
									context.translate(conf.x, conf.y);
									context.rotate(conf.r);
									
									//redraw saved image
									context.drawImage(this, 0, 0);	
								}
							});
						},
						rotateL: function() {
							var conf = {
								x: 0,
								y: editor.height,
								r: -90 * Math.PI / 180
							};
							tools.rotate(conf);
						},
						rotateR: function() {
							var conf = {
								x: editor.width,
								y: 0,
								r: 90 * Math.PI / 180
							};
							tools.rotate(conf);
						},
						resize: function() {
							
							//create resizable over canvas
							var coords = $(editor).offset(),
								resizer = $("<div>", {
									id: "resizer"
								}).css({
									position: "absolute",
									left: coords.left,
									top: coords.top,
									width: editor.width - 1,
									height: editor.height - 1
								}).appendTo("body");
							
							var resizeWidth = null,
								resizeHeight = null,
								xpos = editor.offsetLeft + 5,
								ypos = editor.offsetTop + 5;								
							
							resizer.resizable({
								aspectRatio: true,
								maxWidth: editor.width - 1,
								maxHeight: editor.height - 1,
								resize: function(e, ui) {
									resizeWidth = Math.round(ui.size.width);
									resizeHeight = Math.round(ui.size.height);
									
									//tooltip to show new size
									var string = "New width: " + resizeWidth + "px,<br />new height: " + resizeHeight + "px";
									
									if ($("#tip").length) {
										$("#tip").html(string);
									} else {
										var tip = $("<p></p>", {
											id: "tip",
											html: string
										}).css({
											left: xpos,
											top: ypos
										}).appendTo("body");
									}
								},
								stop: function() {

									//confirm resize, then do it
									var confirmDialog = $("<div></div>", {
										html: "Image will be resized to " + resizeWidth + "px wide, and " + resizeHeight + "px high.<br />Proceed?"
									});
									
									//init confirm dialog
									confirmDialog.dialog({
										resizable: false,
										modal: true,
										title: "Confirm resize?",
										buttons: {
											Cancel: function() {
												//tidy up
												$(this).dialog("close");
												resizer.remove();
												$("#tip").remove();
											},
											Yes: function() {
												
												//tidy up
												$(this).dialog("close");
												resizer.remove();
												$("#tip").remove();
												
												$("<img/>", {
													src: editor.toDataURL(),
													load: function() {
														
														//remove old image
														context.clearRect(0, 0, editor.width, editor.height);
														
														//resize canvas
														editor.width = resizeWidth;
														editor.height = resizeHeight;
														
														//redraw saved image
														context.drawImage(this, 0, 0, resizeWidth, resizeHeight);	
													}
												});
											}
										}
									});
								}
							});
						},
						greyscale: function() {

							//get image data
							var imgData = context.getImageData(0, 0, editor.width, editor.height),
								pxData = imgData.data,
								length = pxData.length;

							for(var x = 0; x < length; x+=4) {
								
								//convert to grayscale
								var r = pxData[x],
									g = pxData[x + 1],
									b = pxData[x + 2],
									grey = r * .3 + g * .59 + b * .11;
								
								pxData[x] = grey;
								pxData[x + 1] = grey;
								pxData[x + 2] = grey;								
							}
							
							//paint grayscale image back
							context.putImageData(imgData, 0, 0);								
						},
						sepia: function() {
							
							//get image data
							var imgData = context.getImageData(0, 0, editor.width, editor.height),
								pxData = imgData.data,
								length = pxData.length;

							for(var x = 0; x < length; x+=4) {
								
								//convert to grayscale
								var r = pxData[x],
									g = pxData[x + 1],
									b = pxData[x + 2],
									sepiaR = r * .393 + g * .769 + b * .189,
									sepiaG = r * .349 + g * .686 + b * .168,
									sepiaB = r * .272 + g * .534 + b * .131;
								
								pxData[x] = sepiaR;
								pxData[x + 1] = sepiaG;
								pxData[x + 2] = sepiaB;								
							}
							
							//paint sepia image back
							context.putImageData(imgData, 0, 0);								
						}
					};
				
					$("#toolbar").children().click(function(e) {
						e.preventDefault();
						
						//call the relevant function
						tools[this.id].call(this);
					});
			})(jQuery);
		</script>
           
                <style>
                    #wide { max-width: 100px;}
                </style>
</body></html>

         <?php
     

         $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
         if (in_array($ext, $supported_file)) {
            echo basename($image)."<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
          
             echo '<img id="wide" src="'.$image .'" alt="Random image"  />'."<br /><br />";
            } else {
                continue;
            }
          }
       ?>