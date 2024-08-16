<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MY WEBSITE
    </title>
    <style>
  
img:hover {
  --_p: 75%;
  filter: grayscale(1%);
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
    background-image: url(galleryb.jpg);
    background-attachment: fixed;
    
    
}


body {
    font-family: Arial, sans-serif;
    background-color: #1a1a1a;
    color: #fff;
    margin: 0;
    padding: 0; 
    background-size: cover;
    background-position: center;
    background-image: url(galleryb.jpg);
    background-attachment: fixed;
    
}


.navbar {
    margin-top:0;
  padding:0;
  display: flex;
  justify-content:center;
  align-items:center;
  height:10vh;
  background:#112c38;

}

.navbar .logo img {
   
   shape-outside: margin-box;
    height: auto;
   max-width: 60px;
}
    

.navbar .navbar-list {
    margin:0;
  padding:0;
  display:flex;
  align-items: left;
}

.navbar .navbar-item {
    list-style: none;   
  margin:0 20px;
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








/* Apply hover effect to show dropdown content */
.language-dropdown:hover .language-dropdown-content,
.laws-dropdown:hover .laws-dropdown-content,
.rights-dropdown:hover .rights-dropdown-content,
.login-dropdown:hover .login-dropdown-content,
.dropdown:hover .dropdown-content {
    display: block;
}

.language-dropdown-content,
.laws-dropdown-content,
.rights-dropdown-content,
.login-dropdown-content,
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    min-width: 160px;
    width: auto; /* Set a fixed width */
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    left: 0;
    top: 100%;
}

/* Dropdown content styles */
.language-dropdown-content a,
.laws-dropdown-content a,
.rights-dropdown-content a,
.login-dropdown-content a,
.dropdown-content a {
    color: #fff;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    transition: background-color 0.3s;
    width: 100%;
}

/* Make dropdown options display vertically */
.language-dropdown-content,
.laws-dropdown-content,
.rights-dropdown-content,
.login-dropdown-content,
.dropdown-content {
    display: block;
}

/* Hover effect for dropdown options */
.language-dropdown-content a:hover,
.laws-dropdown-content a:hover,
.rights-dropdown-content a:hover,
.login-dropdown-content a:hover,
.dropdown-content a:hover {
    background-color: black;
}

/* Style the drop-down menu */
.dropbtn {
    background-color: transparent;
    color: orange;
    border: none;
    cursor: pointer;
    font-weight: bold;
    font-size: 16px;
}


/* Centered Search Bar */
.centered-search-bar {
    text-align: center;
    margin: 20px auto;
    background: transparent;

}

.centered-search-bar input[type="text"],
.centered-search-bar button.search-btn {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    margin: 5px;
}

.centered-search-bar input[type="text"]::placeholder {
    color: #888;
}
.banner{
    background-image: url(grey.jpeg);
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
    margin-top: 30px;
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
    
    transition: transform 0.9s;
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

.banner.animate .banner-item {
    animation: scrollBanner 10s linear infinite;
}

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
    transition: background-color 0.4s;
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



.a{ 
    
    padding-left: 200px;
    font-size: 50px;
    
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
    
    }
    .right1 {
        background-color: grey;
        padding: 20px;
        background-image: url(grey.jpeg);
        background-size: cover;
        background-position: center;
    
        
        
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
        color: grey;
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
    width: 100%; /* Adjust the width as needed */

    
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
        
        background-size: cover;
        background-position: center;
    
}
.delight9{
    color: darkorange;
    font-size: 30px;
    padding-left: 70px;
    padding-top: 20px;
    
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
     /* Center the logo horizontally */
    margin-left: 10px;
}

.logo-containera img {
    max-width: 10%; /* Ensure logos don't exceed container width */
    height: auto; /* Maintain aspect ratio */
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 10px;
    margin-left: 10px;
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
.banner-containerx{
    display: flex;
    overflow: hidden;
    background-image: url(grey.jpeg);
    margin-top: 20px;
}

.banner-itemx{
    flex: 1; /* Equal width foreach item */
    margin: 10 30px; /* Adjust spacing between images */
    margin-top: 20px;
}
.gallery{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.gallery img{
    width:390px;
    height: 300px;
    border-radius: 13px;
    box-shadow: 4px 7px 7px 0px #00000042;
    cursor: pointer;
    margin: 10px;
    transition: 400ms;
    margin-left: 60px;
    transition: transform 0.3s ease;


}
.gallery img:hover{
    filter:drop-shadow(1);
    transform: scale(1.1);
    transition: transform 0.3s ease;
    cursor: pointer;
}
.decoration{
    text-align: center;
    margin-top: 100px;
    font-family:'Times New Roman', Times, serif;
    font-size: 60px;

    color: white;
}

  </style>
</head>

<body>
    <header>
        
        
    
    <nav class="navbar">
    
        
        <div class="logo">
            <img src="luxi.jpg" alt="Company Logo">
        </div>
        <h1 class="a">Luxurious Hotel</h1>
        <ul class="navbar-list">
            
            <li class="navbar-item"><a href="home.php">Home</a></li>
            <li class="navbar-item"><a href="login.php">Login</a></li>
            <li class="navbar-item"><a href="about.php">About us</a></li>
            <li class="navbar-item"><a href="gallery.php">Gallery</a></li>
            <li class="navbar-item"><a href="#">Dining</a></li>
            
    
                
            </li>
        </header>
           
            

        </ul>
    </nav>
    <div> <p class="decoration"><b>Gallery</b></p></div>
<br>
<br>
<br>


        <br>
        <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>



<br>
<br>
<br>
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<br>
<br>
<br>
    

    <!-- Banners -->
    <div class="banner">
        <div class="gallery" ondblclick="handleDoubleClick(this)">
        
    <div >
        <img src="gallery1.webp" alt="Image 1">
         <img src="gallery2.webp" alt="Image 2">
         <img src="gallery3.webp" alt="Image 2">
         <img src="gallery4.webp" alt="Image 2">
         <img src="gallery5.webp" alt="Image 2">
         <img src="gallery6.webp" alt="Image 2">
         <img src="gallery8.webp" alt="Image 2">
         <img src="gallery9.webp" alt="Image 2">
         <img src="gallery11.webp" alt="Image 2">
         <img src="gallery12.webp" alt="Image 2">
         <img src="swim.jpg" alt="Image 2">
         <img src="hotel23.webp" alt="Image 2">
        
         <img src="gallery13.webp" alt="Image 2">
         <img src="gallery14.webp" alt="Image 2">
         <img src="gallery15.webp" alt="Image 2">
         <img src="gallery16.webp" alt="Image 2">
         <img src="hotel17.jpg" alt="Image 2">
         <img src="gallery18.webp" alt="Image 2">
         <img src="gallery19.webp" alt="Image 2">
         <img src="gallery20.webp" alt="Image 2">
         <img src="gallery21.webp" alt="Image 2">
         
         
         
         
         

         
         
         
         



    </div></div>
   
        </div>
            
            
        
        <!-- Add more banner items as needed -->
         
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


<script>
// Function to handle double click event
function handleDoubleClick(element) {
  // Toggle the "clicked" class on the image container
  element.classList.toggle("clicked");
}
</script>
</body>
</html> 
       

    