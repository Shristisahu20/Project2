<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <style>
  
    body {
	background: #323641;
}

.letter-image {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 200px;
	height: 200px;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	cursor: pointer;
}

.animated-mail {
	position: absolute;
	height: 150px;
	width: 200px;
	-webkit-transition: .4s;
	-moz-transition: .4s;
	transition: .4s;
	
	.body {
		position: absolute;
		bottom: 0;
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 0 0 100px 200px;
		border-color: transparent transparent #e95f55 transparent;
		z-index: 2;
	}
	
	.top-fold {
		position: absolute;
		top: 50px;
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 50px 100px 0 100px;
		-webkit-transform-origin: 50% 0%;
		-webkit-transition: transform .4s .4s, z-index .2s .4s;
		-moz-transform-origin: 50% 0%;
		-moz-transition: transform .4s .4s, z-index .2s .4s;
		transform-origin: 50% 0%;
		transition: transform .4s .4s, z-index .2s .4s;
		border-color: #cf4a43 transparent transparent transparent;
		z-index: 2;
	}
	
	.back-fold {
		position: absolute;
		bottom: 0;
		width: 200px;
		height: 100px;
		background: #cf4a43;
		z-index: 0;
	}
	
	.left-fold {
		position: absolute;
		bottom: 0;
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 50px 0 50px 100px;
		border-color: transparent transparent transparent #e15349;
		z-index: 2;
	}
	
	.letter {
		left: 20px;
		bottom: 0px;
		position: absolute;
		width: 160px;
		height: 60px;
		background: white;
		z-index: 1;
		overflow: hidden;
		-webkit-transition: .4s .2s;
		-moz-transition: .4s .2s;
		transition: .4s .2s;
		
		.letter-border {
			height: 10px;
			width: 100%;
      background: repeating-linear-gradient(
        -45deg,
        #cb5a5e,
        #cb5a5e 8px,
        transparent 8px,
        transparent 18px
      );
		}
		
		.letter-title {
			margin-top: 10px;
			margin-left: 5px;
			height: 10px;
			width: 40%;
			background: #cb5a5e;
		}
		.letter-context {
			margin-top: 10px;
			margin-left: 5px;
			height: 10px;
			width: 20%;
			background: #cb5a5e;
		}
		
		.letter-stamp {
			margin-top: 30px;
			margin-left: 120px;
			border-radius: 100%;
			height: 30px;
			width: 30px;
			background: #cb5a5e;
			opacity: 0.3;
		}
	}
}

.shadow {
	position: absolute;
	top: 200px;
	left: 50%;
	width: 400px;
	height: 30px;
	transition: .4s;
	transform: translateX(-50%);
	-webkit-transition: .4s;
	-webkit-transform: translateX(-50%);
	-moz-transition: .4s;
	-moz-transform: translateX(-50%);
	
	border-radius: 100%;
	background: radial-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.0), rgba(0,0,0,0.0));
}

	.letter-image:hover {
		.animated-mail {
			transform: translateY(50px);
			-webkit-transform: translateY(50px);
			-moz-transform: translateY(50px);
		}
		
		.animated-mail .top-fold {
			transition: transform .4s, z-index .2s;
			transform: rotateX(180deg);
			-webkit-transition: transform .4s, z-index .2s;
			-webkit-transform: rotateX(180deg);
			-moz-transition: transform .4s, z-index .2s;
			-moz-transform: rotateX(180deg);
			z-index: 0;
		}
		
		.animated-mail .letter {
			height: 180px;
		}
		
		.shadow {
			width: 250px;
		}
	}
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-image: url(hotel.avif) ;
      background-size: cover;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    img {
      max-width: 100%;
      height: auto;
      margin-bottom: 80px;
    }

    .centered-button {
      display: block;
      margin: 0 auto;
      padding: 10px 20px;
      font-size: 18px;
      margin-top: 40%;
    }
    .a{
        font-size: 50px;
        margin-top: 10%;
        font-family:fantasy;
    }
    .c{
      font-size: 10px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1></h1>
    <div class="a">Luxorious hotel</div>
    <h1 class="c">&copy; 2024</h1>
    <br>
    <br>
    <br><div class="letter-image">
  <div class="animated-mail">
    <div class="back-fold"></div>
    <div class="letter">
      <div class="letter-border"></div>
      <div class="letter-title"></div>
      <div class="letter-context"></div>
      <div class="letter-stamp">
        <div class="letter-stamp-inner"></div>
      </div>
    </div>
    <div class="top-fold"></div>
    <div class="body"></div>
    <div class="left-fold"></div>
  </div>
  <div class="shadow"></div>
</div><!-- Added the .button-container div inside the .envelope div -->
<div class="animated-mail">
  <div class="envelope">
    <div class="letter-title"></div>
    <div class="letter-context"></div>
    <div class="letter-stamp"></div>
    <!-- Added .button-container div here -->
    <div class="button-container">
      <!-- Added anchor tag with .explore-button class for the button -->
      <a href="home.php" class="explore-button">Explore More</a>
    </div>
  </div>
</div>


    
    
    <button class="centered-button"> <a href="home.php">Explore More</a></button>
  </div>

</body>
</html>
