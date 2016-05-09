<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Juego de correspondencias Ricardo & David</title>
	<style>
		img{
			position:absolute;
			width: 100px;
			height: 100px;
		}
		div{
			position:absolute;
			width: 500px;
			height: 500px;
		}
		#rightSide { 
			left: 500px; 
            border-left: 1px solid black; 
		}
    </style>
</head>
<body onLoad="generateFaces()">
	<h2>Juego de correspondencias</h2>
    <p>Haga clic en la cara sonriente extra en la parte izquierda de la pantalla</p>
    <p>Autores: Ricardo & David</p>
	<div id="leftSide"></div>
	<div id="rightSide"></div>
    <script>
		var numberOfFaces= 5;
		var count;
		var theLeftSide = document.getElementById("leftSide");
		var theRightSide = document.getElementById("rightSide");
		var theBody = document.getElementsByTagName("body")[0];
		
		function delete_all_children() { 
            while (theLeftSide.firstChild) 
            theLeftSide.removeChild(theLeftSide.firstChild);
			while (theRightSide.firstChild) 
            theRightSide.removeChild(theRightSide.firstChild);
        }
			
		function generateFaces(){	
			count = 0;
			while(count < numberOfFaces){
			var this_imagen = document.createElement("img");
			this_imagen.setAttribute("src","http://home.cse.ust.hk/~rossiter/mooc/matching_game/smile.png");
			this_imagen.style.top = random_position() + "px";
        	this_imagen.style.left = random_position() + "px";
			theLeftSide.appendChild(this_imagen);
			count ++;
			}
			var leftSideImages = theLeftSide.cloneNode(true);
			leftSideImages.removeChild(leftSideImages.lastChild);
			leftSideImages.setAttribute("id","");
			theRightSide.appendChild(leftSideImages);
			
			theLeftSide.lastChild.onclick=function nextLevel(event){ event.stopPropagation();
			numberOfFaces += 5;
			delete_all_children();
        	generateFaces();};
			
			theBody.onclick = function gameOver() { alert("!!!!!!Juego Terminado!!!!!!");
			theBody.onclick = null;
    		theLeftSide.lastChild.onclick = null;
			location.reload();
			}; 	
		}	
		
		function random_position(){
			var random_pos = Math.random() * 400;
        	return Math.floor(random_pos);	
		}

	</script>
</body>
</html>
