<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MY WEBSITE
    </title>
    <style>
        body {
	background: #323641;
}

.letter-image {
	position: absolute;
	top: 270%;
	left: 80%;
	width: 200px;
	height: 3px;
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
        
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    font-family: Arial, sans-serif;
    background-color: #1a1a1a;
    color: #fff;
    margin: 0;
    padding: 0; 
    background-size: cover;
    background-position: center;
    background-image: url(hotel.avif);
    background-attachment: fixed;
    
}


.navbar {
    margin-top:0;
  padding:0;
  display: flex;
  justify-content:center;
 
  height:10vh;
  background:#112c38;

}

.navbar .logo img {
   margin-left: 1%;
   shape-outside: margin-box;
    height: auto;
   max-width: 60px;
}
    

.navbar .navbar-list {
    margin:0;
  padding:0;
  display:flex;
  align-items: left;
  margin-left:30px;
}

.navbar .navbar-item {
    list-style: none;   
  margin:0 20px;
  margin-left: 30px;
  text-shadow: 1px 1px 2px white, 0 0 25px white, 0 0 5px white;

  transition:0.5s;
}

.navbar .navbar-item a{
  display: block;
  position:relative;
  text-decoration:none;
  padding:5px;
  font-size:18px;
  font-family: sans-serif;
  color:#fff;
  text-transform:uppercase;
  transition:0.5s;
}

.navbar:hover .navbar-item a{
  transform:scale(1.5);
  opacity:0.2;
  filter:blur(5px);
}

.navbar .navbar-item a:hover{
  transform:scale(2);
  opacity:1;
  filter:blur(0);
  text-decoration:none;
  color:#fff;
}

.navbar .navbar-item a:before{
  content:'';
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:#ff497c;
  transition:0.5s;
  transform-origin:right;
  transform:scaleX(0);
  z-index:-1;
}

.navbar .navbar-item a:hover:before{
  transition:transform 0.5s;
  transform-origin:left;
  transform:scaleX(1);
}







/* Centered Search Bar */
.centered-search-bar {
    text-align: center;
    margin: 10px auto;
    color: white;
    font-family:serif;

    

}
            .tutorial{
            width: 25em;
            border: 1px solid;
            padding: 7px 7px;
            background-color:#003F5C;
            color:white;
            text-align: center;
            left: 10px;
        }
        .tutorial1 {
            text-align: center;
            
         }

.centered-search-bar input[type="text"],
.centered-search-bar button.search-btn {

    
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    margin: 5px;
}



/* Banners */
.banner-container {
    display: flex;
    overflow: hidden;
    background-color: black;
    backdrop-filter: blur(20px);
    background: transparent;
}


.banner .banner-item {
    margin-top: 10px;
    padding: 100px;
    background-color: black;
    
    transition: transform 0.5s;
    background-image: url(grey.jpeg);


}
.banner .banner-item1 {
    margin-top: 10px;
    padding: 100px;
    background-color: black;
    
    transition: transform 0.5s;
    background-image: url(white.jpg);


}
.banner .banner-item2 {
    margin-top: 0px;
    padding: 100px;
    background-color: black;
    
    transition: transform 0.5s;
    background-image: url(black.jpg);

}

.banner .banner-item h2 {
    font-size: 30px;
    color: 808080;
    text-align: right;
}

.banner .banner-item p {
    font-size: 20px;
    margin: #333;
    text-align: right;
    vertical-align: baseline;
    color: 808080;
    direction: rtl;
}
.banner .banner-item p1 {
    font-size: 17px;
    margin: #333;
    text-align: right;
    vertical-align: baseline;
    color:808080;
    direction: rtl;
    
}

/* Animation for banners */



/* Centered Photos */
.low-end-section {
    text-align: center;
    margin: 40px 0;
    
    
}

.low-end-section .image {
    text-align: center;
    margin: 20px;
    position: relative;
}

.low-end-section .image img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
}

.low-end-section .image .transparent-block {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s;
    background: transparent;
    backdrop-filter: blur(10px);
}

.low-end-section .image:hover .transparent-block {
    opacity: 1;
    background: transparent;
    backdrop-filter: blur(10px);
}

/* Feedback Section */
.feedback-section {
    text-align: center;
    margin: 40px auto;
    padding: 20px;
    background-color: #333;
    max-width: 700px;
    border-radius: 10px;
    animation: fadeInUp 1s ease;
    background: transparent;
    backdrop-filter: blur(10px);
}

.feedback-section h2 {
    font-size: 20px;
    color: #6200ff;
    margin-bottom: 10px;
}

.feedback-section p {
    font-size: 16px;
    color: #fff;
}

.feedback-section form {
    margin-top: 20px;
}

.feedback-section textarea {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #444;
    color: black;
    resize: none;
    
}

.feedback-section textarea::placeholder {
    background: transparent;
    backdrop-filter: blur(10px);
}

.feedback-section button[type="submit"] {
    background-color: #2200ff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.feedback-section button[type="submit"]:hover {
    background-color: #6a00ff;
}

/* Footer */
footer {
    text-align: center;
    background-color: #333;
    padding: 20px 10px;
    color: #fff;
    font-weight: bold;
    position: relative;
    z-index: 2;
    background-image: url(yello.jpg);
    background-position: cover;
    
    

   
}

/* Animation for feedback section */
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}



.ax{ 
    
    padding-left: 200px;
    font-size: 50px;
    text-shadow: 1px 1px 2px white, 0 0 25px white, 0 0 5px black;
    
}
.b{
    background-color: #1a1a1a;
}
@keyframes scrollBanner {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(-100%);
    }

}
.c{
    max-width: 70px;
}
/* Footer styles */


/* Style for footer logo */
footer img {
    max-width: 35px; /* Adjust the maximum width as needed */
    height: auto;
    float: right; /* Float the image to the right */
    margin-left: 10px; /* Add margin to separate image from text */
    margin-right: 20px;
    margin-bottom: 20px;
}

/* Style for the text content in the footer */
footer p {
    margin: 10px; /* Remove default margin to prevent spacing */
}



.first{
    vertical-align: baseline;
    display: inline-block;

}
.image{
    text-align: left;
}
.split-screen {
        display: grid;
        grid-template-columns: 3fr 2fr 3fr; /* Divide into two equal columns */
        height: 70vh; /* Full viewport height */
    }
    .left {
        background-color: transparent;
        padding: 30px;
        font-size: 20px;
        text-align: center;
    }
    .right {
        background-color: white;
        padding: 30px;
        font-display: black;
        text-align: left;
        text-align: 10px;
        color: black;
        font-family: bold;
        font-size: 30px;
        box-shadow: 10px 10px 5px black;
        border-radius: 8px;

    }
    .center {
        background-color: transparent;
        padding: 20px;
        font-size: 10px;
    }
    .split-screen-2 {
        display: grid;
        grid-template-columns: 2fr 2fr; /* Divide into two equal columns */
        height: 70vh; /* Full viewport height */
    }
    .left1{
        background-color: transparent;
        padding: 20px;
        background-image: url(dish.jpg!d);
        background-size: cover;
        background-position: center;
        border-radius: 10px;
        
        transition: filter 0.4s ease-in-out;
        filter: grayscale();
      
  cursor: pointer;
  filter: grayscale(50%);
  transition: .3s;

        
    }
      .left1:hover{

        filter:none; --_p: 75%;
        transform: scale(0.5); 
    }

  .btn {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: none;
    background: slateblue;
    color: white;
    font-size: 20px;
    font-weight: 500;
    line-height: 1;
  }
  
  .btn:hover {
    transform: translateY(-10px);
  }

    .right1 {
        background-color: grey;
        padding: 20px;
        background-image: url(grey.jpeg);
        background-size: cover;
        background-position: center;
        border-radius: 8px;
        .wrapper {
  display: flex;
  padding: 0;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.menu-item {
  width: 150px;
  max-height: 100px;
  background-color: orangered;
  color: white;
  border-radius: 8px;
  text-align: center;
  padding: 8px;
  margin-bottom: 4px;

  transform-origin: 0 0;
  transform: translateX(-100px);
  opacity: 0;

  transition-property: transform, opacity;
  transition-duration: 1s;
  transition-timing-function: ease;
}

.wrapper:is(:hover, :focus) .menu-item {
  transform: translateX(0);
  opacity: 100%;
}

.wrapper .menu-item:nth-of-type(1) {
  transition-delay: 0ms;
}

.wrapper .menu-item:nth-of-type(2) {
  transition-delay: 100ms;
}

.wrapper .menu-item:nth-of-type(3) {
  transition-delay: 200ms;
}

.wrapper .menu-item:nth-of-type(4) {
  transition-delay: 300ms;
}

.wrapper .menu-item:nth-of-type(5) {
  transition-delay: 400ms;
}

.wrapper p {
  font-weight: bold;
  margin-bottom: 8px;
}

    
        
        
    }
    .split-screen-3 {
        display: grid;
        grid-template-columns: 3fr 2fr 3fr; /* Divide into two equal columns */
        height: 70vh; /* Full viewport height */
    }
    .left2 {
        background-color: transparent;
        padding: 20px;
    }
    .right2 {
        background-color: white;
        padding: 20px;
        font-display: grey;
        text-align: left;
        text-align: 10px;
        color: grey; box-shadow: 10px 10px 5px black;
        border-radius: 8px;
    


    }
    .center2 {
        background-color: transparent;
        padding: 20px;
        font-size: 10px;
    }
    .split-screen-4 {
        display: grid;
        grid-template-columns: 2fr 2fr; /* Divide into two equal columns */
        height: 60vh; /* Full viewport height */
    }
    .left3{
        background-color: transparent;

    }
    .right3 {
        background-color: white;
        
    }
    .split-screen-5 {
        display: grid;
        grid-template-columns: 2fr 2fr 2fr 2fr; /* Divide into two equal columns */
        height: 40vh; /* Full viewport height */
        
    }
    .right4{
        font-size: 10px;
        background-color: darkslategrey;
        background-attachment: fixed;

    }
    .center4{
        font-size: 10px;
        background-color: darkslategrey;
        background-attachment: fixed;
    }
    
    .left4{
        font-size: 10px;
        background-color: darkslategrey;
        background-attachment: fixed;
    }
    .left4_1{
        background-color: darkslategrey;
        background-attachment: fixed;
    }

    .bittu{
        font-size: 20px;
    
        text-align: left;
        padding-left: 10px;
    }
   
.right-align {
    text-align: right;
}
.de{
           text-align: center;
           align-items: center;
           float:right;
           
           
        }
        .w{
            height: 30px;
            width:70px;
        }
        .banner-a{
            height: 5px;
            width:10px;
        }
        .s{
            text-align: left;
            color: #1a1a1a;
            font-size: 38px;
            font-family: bold;
            
  text-shadow: 1px 1px 2px white, 0 0 25px white, 0 0 5px white;
        }
        .l2{
            font-size: 20px;
            text-align: left;
            color: grey;
            font-family: bold;
        }
        .l1{
            font-size: 20px;
            text-align: left;
            color: grey;
            font-family: bold;
            padding-left: 70px;
        }
        .m{
            color: orange;
            font-size: 20px;
            text-align: left;
            font-style: italic;
        }
        .p{
            font-size: 20px;
            text-align: right;
            color: #444;
            color: grey;
            line-break: anywhere;

            
   
        }
       .container{ display: flex;
    justify-content: space-between;
    white-space: nowrap;

}
.left-paragraph, .right-paragraph {
    width: 45%; /* Adjust the width as needed */
    border-radius: 8px;

    
}
.delight{
    text-align: center;
    color: orange;
    font-size: 20px;
    padding-top: 20px;
}
.delight2{
    color:darkslategrey;
    text-align: center;
    font-size: 30px;
}
.delight3{
    font-size: 20px;
    color:darkslategrey;
    text-align: center;
}
.delight4{
    float: center;
    max-width: 5px; /* Adjust the maximum width as needed */
    height: 5px;
    margin-left: 5px; /* Add margin to separate image from text */
    margin-right: 5px;
    margin-bottom: 5x;
}
.delight5{
    shape-outside: margin-box;
    text-align: center;
    height: 1px;
   max-width: 1px;
}
.frame {
    max-width: 300px; /* Adjust the maximum width as needed */
    max-height: 200px; /* Adjust the maximum height as needed */
}

.frame img {
    width: 100%;
    height: auto;
    max-width: 70px; /* Adjust the maximum width as needed */
    max-height: 70px; /* Adjust the maximum height as needed */
    text-align: right; /* Center the content horizontally */
    display: flex; /* Enable flexbox for vertical centering */
    align-items: right;
    margin: 10px; /* Center the image horizontally */
    display: block; 
    margin-left: 300px;
    


}
.delight6{
    text-align: center;
    font-size: 30px;
    font-style: bold;
    color: #1a1a1a;
    transition: 500ms linear; 
    animation: moveToRight 2s ease-in-out;
    
}
.p1{
    color: darkslategrey;
    font-size: 20px;
    
    text-align: left;
    padding-left: 20px;
}
.delight7{
    text-align: center;

    
}
.clickable-btn-a{
    font-size: 16px;
    text-align: center;
    background-color: orange;
    border: none;
    height: 35px;
    width: 120px;
    margin-left: 290px;
    padding-top: 5px;
    padding-left: 5px;
    padding-right: 5px;
    padding-bottom: 5px;

}
.delight8{
    background-image: url(hotel2.jpg);
    background-position: cover;
        padding: 20px;
        
       
        border-radius: 8px;
        background-color: transparent;
        padding: 20px;
        
        
        background-size: cover;
        background-position: center;
        border-radius: 10px;
        
        transition: filter 0.4s ease-in-out;
        filter: grayscale();
      
  cursor: pointer;
  filter: grayscale(50%);
  transition: .3s;

        
    }
      .delight8:hover{

        filter:none; --_p: 75%;
        transform: scale(0.5); 
    }








.delight9{
    color: darkorange;
    font-size: 30px;
    padding-left: 70px;
    padding-top: 20px;
    border-radius: 8px;
    
}
.delight10{
    padding-left: 80px;
    color: darkslategrey;
    font-size: 15px;
}
.delight12{
    
   justify-content: space-between;
   align-items: left;
}
.delight13{
    justify-content: space-between;
    align-items: right;
}
.bannera{
    display: flex; /* Use flexbox for layout */
    justify-content: center; /* Center the content horizontally */
    align-items: center; /* Center the content vertically */
}

.logo-containera {
    margin: 0 10px; /* Add spacing between logos */
    flex: 1; /* Allow logos to take up equal space */
    text-align: center; /* Center the logo horizontally */
    box-shadow: 10px 10px 5px black;

}

.logo-containera img {
    max-width: 50%; /* Ensure logos don't exceed container width */
    height: auto; /* Maintain aspect ratio */
    padding-top: 5px;
    padding-bottom: 5px;
    transition: property 0.3s;
}
.i{
    font-size: 20px;
    color:darkgoldenrod;
    font-style: bold;
    margin-top:  40px;
    margin-left: 20px;
    
}
.h{
    font-size: 20px;
    margin-left: 20px;
    
}
.j{
    font-size: 20px;
    margin-left: 40px;
}
.k{
    font-size: 20px;
    color:darkgoldenrod;
    font-style: bold;
    margin-top:  40px;
    margin-left: 40px;
    
}
.l{
    font-size: 22px;
    margin-left: 20px;
    color: antiquewhite;
}
.box:hover {
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  animation-name: example;
  animation-duration: 0.15s;
  border-left: 8px solid red;
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}


.box {

  
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}
.btn{
cursor:pointer;
	position:relative;
	padding:10px 20px;
	background:white;
	font-size:28px;
	border-top-right-radius:10px;
	border-bottom-left-radius:10px;
	transition:all 1s;
	&:after,&:before{
		content:" ";
		width:10px;
		height:10px;
		position:absolute;
		border :0px solid #fff;
		transition:all 1s;
		}
	&:after{
		top:-1px;
		left:-1px;
		border-top:5px solid black;
		border-left:5px solid black;
	}
	&:before{
		bottom:-1px;
		right:-1px;
		border-bottom:5px solid black;
		border-right:5px solid black;
	}
	&:hover{
		border-top-right-radius:0px;
	border-bottom-left-radius:0px;}
	 background:rgba(0,0,0,.5);
	 color:white;
		&:before,&:after{
			
			width:100%;
			height:100%;
			 border-color:white;
		}
	}


.data-container{
	background:#ffebee;
	height:100vh;
	display:flex;
	justify-content:center;
	align-items:center;
}


    </style>
</head>

<body>
    <header>
        
        
    
    <nav class="navbar">
    
             <div class="logo">
            <img align="left" src="luxi.jpg" alt="Company Logo">
        </div>
        <h1 class="ax">Luxurious Hotel</h1>
           
        <ul class="navbar-list">
            
            <li class="navbar-item"><a href="home.php">Home</a></li>
            <li class="navbar-item"><a href="login.php">Login</a></li>
            <li class="navbar-item"><a href="about.php">About Us</a></li>
            <li class="navbar-item"><a href="gallery.php">Gallery</a></li>
            <li class="navbar-item"><a href="dining.php">Dining</a></li>
            
    
                
            </li>
        </header>
           
            

        </ul>
        
    </nav>
</div>
<br>
<br>
<br>

        <br>
        <br>
    <!-- Centered Search Bar -->
    <div class="tutorial">
        <div class="tutorial1">
    <div class="centered-search-bar">

 <h2 ><marquee>Let's explore the heaven in hotel</marquee></h2>
        
        <!-- Add filter options here -->
    </div></div></div>

<br>
<br>
<br>
<br>
<br>

<br>
    <!-- Banners -->
    <div class="banner">
        
        <!-- First Banner -->
        <div class="banner-item">
            <div class="container">
            <div class="left-paragraph">
        <div class="s"><b>Luxorious Hotel, Nairobi</b></div><br>
        <div class="l2"><b>Located 5 minutes from the Jomo Kenyatta ,International Airport,</b></div><br>
        <div class="l2"><b> next to the Nairobi National Park.</b></div><br><br>
        <div class="m">Comfort & Convenience at ...the Only One!</div></div>
        <div class="right-paragraph">
        
        <div class="p1">Luxorious is a contemporary 4-star hotel in Nairobi,conveniently located</div>
        <div class="p1">at the intersection of Mombasa Road and Southern By-pass,5 minutes </div>
        <div class="p1"> from JKIA through the express highway with close proximity to the</div>
        <div class="p1"> nairobi national park, major government and corporate organizations.</div><br>
        <div class="p1">Luxorious Hotel Nairobi features 167 well-appointed rooms,five meeting</div>
        <div class="p1">&conference rooms, restaurant & bar, gym,swimming pool,</div>
        <div class="p1">gift shop,wellness center among other top facilities offering</div>
        <div class="p1">the best choice venue for your business and leisure stay.</div></div></div></div>
        
           
        </div></div></div>
    </div>
            
            <div class="split-screen">
    <div class="left">
        <!-- Content for the left side -->
        <h2>BOOK YOUR SLOT NOW!</h2>
        <p></p>
    </div>
    <div class="right">
        <div class="box">

        <!-- Content for the right side -->
        <h2 style="color:black; text-align: left; font-size:40px">Hotel Rooms</h2>
        <br>
        <p class="bittu" style ="color:black;">
        <p class="bittu" style ="color:black;">Luxorious Hotel rooms are designed to provide the highest</p> 
        <p class="bittu" style ="color:black;">levels of Comfort, Convenience and Eﬃciency.</p>
        <p class="bittu" style ="color:black;">The hotel has 167 air-conditioned rooms, of these</p>
        <p class="bittu" style ="color:black;">158 are Superior rooms, 2 rooms for guests with special needs,</p>
        <p class="bittu" style ="color:black;">3 triple rooms, 1 Junior Suite</p> 
        <p class="bittu" style ="color:black;">and 3 Executive Suites. Guests staying in
        <p class="bittu" style ="color:black;">the Hotel have exclusive access to the gym and swimming pool.</p>
    </div></div>
    <div class="center">
        <!-- Content for the right side -->
        <h2></h2> 
        <p></p>
    </div>
    
</div>
        </div>
        
        <div class="split-screen-2">
    <div class="left1">
      
        <!-- Content for the left side -->
        <h2></h2>
        <p></p>
    </div>
    <div class="right1">
        <div class="box">
        <!-- Content for the right side -->
        <h2 class="delight"> Enjoy Delactable</h2><br>
        <p class="delight2"><b>Dining Experience at Luxorious Hotel</b> </p><br>
        
        <p class="frame img"> <img  div class=" box" src="logoa.png"></p>
        <p class="delight3">Luxorious Hotel has stirred up the local culinary scene with two restaurants, two bars and a 24-hr coffee shop that cater to the needs of our diverse clientele. Each dining experience provides our guests with a taste of a broad selection of international and local cuisine.

</p><br>
<br>
<p class="clickable-btn-a"><a href="login.php">Dining option</a></p>
    </div></div>
    
</div>
<div>
    <div class="split-screen-3">
        <div class="left2">
            
    </div>
    <div class="right2">
        <div class="box">
    <p class="delight6"><b>Meetings & Events</b></p><br>
    <p class="p1">Located on the ground ﬂoor and the ﬁrst</p>
    <p class="p1">ﬂoor, the air-conditioned multi-functional 3</p>
    <p  class="p1">meeting rooms and 2 board rooms caters for</p>
    <p class="p1">up to 200 people theater style and can be</p>
    <p class="p1">adapted to suit speciﬁc needs of guests.</p><br>
    <p class="p1">Each meeting room features natural day-</p>
    <p class="p1">light, state-of-the-art audiovisual equipment</p>
    <p class="p1">and a business center for the conference users.</p><br><br>
        </div>

    </div>


    </div>
</div>
<br>

<div class="split-screen-4">
    <div class="right1">
<p class="delight9"><b>Luxorious Hotel Facilities</b></p><br>
<p class="l1">Rooms | Dining | Meeting & Events | Leisure</p><br>
<div class="wrapper" tabindex="0">
  <p></p>
  <div class="menu-item">167 well-appointed guest rooms</div>
  <div class="menu-item">Galaxy bar and bar deck</div>
  <div class="menu-item">Concierge desk</div>
  <div class="menu-item">Free and fast wifi</div>
  <div class="menu-item">Lactation room</div>
</div></div>
    <div class="delight8">

    </div>
</div></div>
        
        <!-- Add more banner items as needed -->
         <div class="banner">
        <div class="banner-item1">
        <div class="bannera">
    <div class="logo-containera">
        <img src="luxi.jpg" alt="Logo 1">
    </div>
    <div class="logo-containera">
        <img src="luxi6.jpg" alt="Logo 2">
    </div>
    <div class="logo-containera">
        <img src="luxi3.png" alt="Logo 3">
    </div>
    <div class="logo-containera">
        <img src="luxi4.webp" alt="Logo 4">
    </div>
    <div class="logo-containera">
        <img src="luxi5.jpg" alt="Logo 5">
    </div>
    <div class="logo-containera">
        <img src="luxi2.png" alt="Logo 6">
    </div>
</div>
 </div>
 <div class="split-screen-5">
    
        <div class="right4">
   <p class="k"> <b>CALL US</p></b><br>
   <p class="l">+254 719 045 000</p>
    <p class="k"><b>EMAIL</p></b><br>
    <p class="l">sales@ekahotel.com</p></div>
    <div class="center4">
        <p class="i"><b>ABOUT US</p></b><br>
         <p class="l"><a href="about.php" style="color: #FFFDD0;">About Us</a></p><br>
         <p class="l"><a href="#" style="color: #FFFDD0;">Offers</a></p><br>
         <p class="l"><a href="gallery.php" style="color: #FFFDD0;">Gallery</a></p><br>
    </div>
    <div class="left4">
        <p class="i"><b>QUICK LINKS</p></b><br>
      <p class="l"><a href="#" style="color: #FFFDD0;">Rooms</a></p><br>
       <p class="l"><a href="#" style="color: #FFFDD0;"> Dining Experience </a></p><br>
        <p class="l"><a href="#" style="color: #FFFDD0;">Meetings & Events</a></p><br>
    </div>
    
    <div class="left4_1">
        <p class="i"><b>LUXORIOUS HOTEL NAIROBI</p></b><br> 
            <p class="l">Luxorious Hotel, a contemporary style hotel that</p> 
              <p class="l">  provides all the comfort, convenience and</p>
               <p class="l">  efficiency to the discerning traveler.</p>
    </div>
    
    </div>
    </div>
 </div>

    <!-- About Our Website Section -->
    <section class="about-website">
        <h2></h2>
        <p> </p>
    </section>

    <!-- Low-End Section -->
   
    </section>

    
  

    <!-- Footer -->
   
<footer>
   <div><img src="f.png" alt="Footer Logo">
          <img src= "wats.png" alt="logo 2" ></div>
   
    <p>&copy; 2023 Luxorious Hotel</p>
</footer>


      
       

    <script src="script.js"></script>
    <?php
    if(isset($_POST["submit"])) {
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "login_example");
        $a = $_POST["comment"];

        $query = "insert into feedback(comment) values('$a')";
        mysqli_query($link, $query);
        echo "feedback submitted";
    }
    ?>
    <?php
    if(isset($_POST["a"]))
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"logical_example");
$seldata=$_POST["search"];
$query="select * from users where name='$seldata'";
$data=mysqli_query($link,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
echo $result['username']." ".$result['password'];
}
?>
</body>

</html>