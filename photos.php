<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Amitabh Bachchan</title>
	<link rel="stylesheet" type="text/css" href="nav2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style>
      	img{
      		height: 500px;
      		width: 50%;
      		display: block;
  			margin: auto;
      	}
      	img:hover {
  			opacity: 1;
		}
      	p{
      		color: black;
  			font-size: 15px;
  			font-weight: 1000;
  			font-family: sans-serif;
  			padding: 8px 12px;
  			position: absolute;
  			bottom: 20px;
  			width: 100%;
  			text-align: center;
      	}
      	span{
      		background-color: black;
      		height: 15px;
      		width: 15px;
      		border-radius: 50%;
      		display: inline-block;
      		transition: background-color 0.6s ease;
      		cursor: pointer;
	}

	.active, .dot:hover {
  		background-color: #717171;
	}
		
	.prev, .next {
  		cursor: pointer;
  		position: absolute;
  		top: 50%;
  		width: auto;
  		padding: 16px;
  		margin-top: -22px;
  		color: white;
  		font-weight: bold;
  		font-size: 18px;
  		transition: 0.6s ease;
  		border-radius: 0 3px 3px 0;
  		user-select: none;
	}
	.next {
  		right: 0;
	}
	.prev:hover, .next:hover {
  		background-color: rgba(0,0,0,0.8);
	}
	.row {
  		display: -ms-flexbox; /* IE10 */
  		display: flex;
  		-ms-flex-wrap: wrap; /* IE10 */
  		flex-wrap: wrap;
  		padding: 0 4px;
	}
		
	/* Create four equal columns that sits next to each other */
	.column {
  		-ms-flex: 25%; /* IE10 */
  		flex: 25%;
  		max-width: 50%;
  		padding: 0 4px;
	}
	.column img {
  		margin-top: 8px;
  		vertical-align: middle;
  		width: 100%;
	}
		
	/* Responsive layout - makes a two column-layout instead of four columns */
	@media screen and (max-width: 800px) {
  		.column {
    		-ms-flex: 50%;
    		flex: 50%;
    		max-width: 50%;
  		}
	}

	/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
	@media screen and (max-width: 600px) {
  		.column {
    		-ms-flex: 100%;
    		flex: 100%;
    		max-width: 100%;
  		}
	}
	.footer {
            left: 0;
            bottom: 0;
            width: 100%;
            height: 6%;
            background-color: black;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body class="bodyclr">
	<div>
		<nav class="navbar navbar-fixed-top">
			<ul class="clr">
				<li><a href="index.php" class="clr"	>HOME</a></li>
				<li><a class="clr active" href="photos.php">PHOTOS</a></li>
				<li><a class="clr" href="login.php">LOGIN</a></li>
				<li><a class="clr" href="register.php">REGISTER</a></li>
			</ul>
		</nav>
	</div>
	<br><br><br><br>
	
	<div>
		<div class="mySlides">
			<img src="images/1.jpg" >
			<div><p>AB forever</p></div>
		</div>
		<div class="mySlides">
			<img src="images/2.jpg" >
			<div><p>AB forever</p></div>
		</div>
		<div class="mySlides">
			<img src="images/3.jpg" >
			<div><p>AB forever</p></div>
		</div>
		<div class="mySlides">
			<img src="images/4.jpg" >
			<div><p>AB forever</p></div>
		</div>
		<div class="mySlides">
			<img src="images/5.jpg" >
			<div><p>AB forever</p></div>
		</div>


		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>
	<div style="text-align:center">
  		<span class="dot" onclick="currentSlide(0)"></span> 
  		<span class="dot" onclick="currentSlide(1)"></span> 
  		<span class="dot" onclick="currentSlide(2)"></span>
  		<span class="dot" onclick="currentSlide(3)"></span>
  		<span class="dot" onclick="currentSlide(4)"></span> 
	</div>

	<br><br><br><br>
	<div class="row">
		<div  class="column">
			<img src="images/6.jpg">
			<img src="images/7.jpg">
			<img src="images/8.jpg">
			<img src="images/14.jpg">
			<img src="images/1.jpg">
		</div>
		<div class="column">
			<img src="images/1.png">
			<img src="images/9.jpg">
			<img src="images/10.jpg">
			<img src="images/15.jpg">
			<img src="images/3.jpg">
		</div>
		<div class="column">
			<img src="images/11.jpg">
			<img src="images/12.jpg">
			<img src="images/13.jpg">
			<img src="images/1.jpeg">
			<img src="images/5.jpg">
		</div>
	</div>
	<br><br>
	<div class="footer2">
        <h2><a href="#top" style="color: white">Top</a></h2>
    </div>

	<script>
		var slideIndex = 0;
		showSlides(slideIndex);
		
		function currentSlide(n) {
  			showSlides(slideIndex = n);
		}

		function plusSlides(n) {
  			showSlides(slideIndex += n);
		}


		function showSlides() {
  		var i;
  		var slides = document.getElementsByClassName("mySlides");
  		var dots = document.getElementsByClassName("dot");
  		for (i = 0; i < slides.length; i++)
    		slides[i].style.display = "none";  
		slideIndex++;
  		if (slideIndex > slides.length) {slideIndex = 1}    
  			for (i = 0; i < dots.length; i++)
				dots[i].className = dots[i].className.replace(" active", "");
		slides[slideIndex-1].style.display = "block";  
  		dots[slideIndex-1].className += " active";
  		setTimeout(showSlides, 2500); // Change image every 2 seconds
		}
	</script>

</body>
</html>
