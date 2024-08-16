<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MY WEBSITE
    </title>
    <style>
        
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
    
}


.navbar {
    background-color: #333;
    padding: 10px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
    backdrop-filter: blur(20px);
    background: transparent;
}

.navbar .logo img {
   shape-outside: margin-box;
    height: auto;
   max-width: 40px;
}
    

.navbar .navbar-list {
    list-style: none;
    display: flex;
    align-items: center;
    padding: 10px;
}

.navbar .navbar-item {
    margin-right: 20px;
}

.navbar .navbar-item:last-child {
    margin-right: 8;
}

.navbar .navbar-item a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    transition: color 0.3s;
}

.navbar .navbar-item a:hover {
    background-color: pink;
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

/* Banners */
.banner-container {
    display: flex;
    overflow: hidden;
    background-color: black;
    backdrop-filter: blur(20px);
    background: transparent;
}


.banner .banner-item {
    flex: 0 0 50%;
    text-align: right;
    padding: 50px;
    background-color: black;
    
    transition: transform 0.5s;
    background-image: url(grey.jpeg);


}

.banner .banner-item h2 {
    font-size: 30px;
    color: 808080;
    text-align: right;
    direction: rtl;
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
    text-align: left;
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
    max-width: 600px;
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
    padding: 20px 0;
    color: #fff;
    font-weight: bold;
    position: relative;
    z-index: 2;
    background-image: url(imga.webp);
    background-position: cover;
    backdrop-filter: blur(20px);
    background: transparent;

   
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
        grid-template-columns: 2fr 1fr 2fr; /* Divide into two equal columns */
        height: 50vh; /* Full viewport height */
    }
    .left {
        background-color: transparent;
        padding: 20px;
    }
    .right {
        background-color: white;
        padding: 20px;
        font-display: black;
        text-align: left;
        text-align: 10px;
        color: black;
    }
    .center {
        background-color: transparent;
        padding: 20px;
        font-size: 10px;
    }
    .split-screen-2{
        display: grid;
        grid-template-columns: 2fr 2fr; /* Divide into two equal columns */
        height: 4px;
        width: 4px; /* Full viewport height */
    }
    .left1{
        background-color: transparent;
        padding: 10px;
    }
    .right1 {
        background-color: transparent;
        padding: 10px;
        
    }
   
    .bittu{
        font-size: 17px;
    
        text-align: left;
        padding-left: 10px;
    }
   
.right-align {
    text-align: right;
}



    </style>
</head>

<body>
    <header>
        
        
    
    <nav class="navbar">
    
        
        <div class="logo">
            <img src="bg.png" alt="Company Logo">
        </div>
        <h1 class="a">Your website</h1>
        <ul class="navbar-list">
            
            <li class="navbar-item"><a href="first.php">Home</a></li>
            <li class="navbar-item"><a href="login.php">Login</a></li>
            <li class="navbar-item"><a href="#">About us</a></li>
            <li class="navbar-item"><a href="#">Services</a></li>
            <li class="navbar-item"><a href="#">Dining</a></li>
            
    
                
            </li>
        </header>
           
            

        </ul>
    </nav>


    

    <!-- Centered Search Bar -->
    <div class="centered-search-bar">
    <input type="text" placeholder="Search...">
    <button class="search-btn">Search</button>   
        
        <!-- Add filter options here -->
    </div>

    <!-- Banners -->
    <div class="banner">
    
        <!-- First Banner -->
        <div style="direction:ltr;" class="banner-item">
        <p> WELCOME OUR WEBSITE</p>
        
        <p style="color:grey;">Eka is a contemporary 4-star hotel in</p>
        <p style="color:grey;">Nairobi,conveniently located</p>
        <p  style="color:grey;">at the intersection of Mombasa Road</p>
        <p style="color:grey;">and Southern By-pass,5 minutes from JKIA through the express</p>
        <p style="color:grey;">highway with close proximity to the Nairobi national</p>
        <p style="color:grey;">park, major government and corporate organizations.</p><br>
        <p style="color:grey;">Eka Hotel Nairobi features 167 well-appointed rooms,five meeting
        <p style="color:grey;">&conference rooms, restaurant & bar, gym,swimming pool,</p>
        <p style="color:grey;">gift shop,wellness center among other top facilities offering</p>
        <p style="color:grey;">the best choice venue for your business and leisure stay.</p></div></div>
            <p></p>
        </div></div>

    </div>
            
            <div class="split-screen">
    <div class="left">
        <!-- Content for the left side -->
        <h2>Left Side</h2>
        <p>Some text here.</p>
    </div>
    <div class="right">
        <!-- Content for the right side -->
        <h2 style="color:black; text-align: left;">Hotel Rooms</h2>
    
        <p class="bittu" style ="color:black;">
        <p class="bittu" style ="color:black;">Eka Hotel rooms are designed to provide the highest</p> 
        <p class="bittu" style ="color:black;">  levels of Comfort, Convenience and Eﬃciency.</p>
        <p class="bittu" style ="color:black;"> The hotel has 167 air-conditioned rooms, of these</p>
        <p class="bittu" style ="color:black;"> 158 are Superior rooms, 2 rooms for guests with special needs,</p>
        <p class="bittu" style ="color:black;">3 triple rooms, 1 Junior Suite</p> 
        <p class="bittu" style ="color:black;">and 3 Executive Suites. Guests staying in
        <p class="bittu" style ="color:black;"> the Hotel have exclusive access to the gym and swimming pool.</p>
    </div>
    <div class="center">
        <!-- Content for the right side -->
        <h2>center side</h2> 
        <p>Some other text here.</p>
    </div>
    
</div>
        </div><br>
        <br>
        <br>
        <div class="split-screen-2">
    <div class="left1">
        <!-- Content for the left side -->
        <h2>Left Side</h2>
        <p></p>
    </div>
    <div class="right1">
        <!-- Content for the right side -->
        <h2></h2>
        <p></p>
    </div>
    


        
        <!-- Add more banner items as needed -->
        
       
    
    


    <!-- About Our Website Section -->
    <section class="about-website">
        <h2>About Our Website</h2>
        <p> </p>
    </section>

    <!-- Low-End Section -->
   
    </section>

    
    <br>
    <br>
    <br>
    <br>

    <!-- Feedback Section -->
    <section class="feedback-section">
        <h2>Feedback</h2>
        <p>We value your feedback. Please share your thoughts and suggestions with us.</p>
        <form>
            <textarea id="feedback" name="feedback" placeholder="Type your feedback here" required></textarea>
            <button type="submit" name="submit">Submit Feedback</button>
        
        </form>
    </section>
    <br>
    <br>
    <br>
    <br>

    <!-- Footer -->
   
<footer>
   <div><img src="f.png" alt="Footer Logo">
          <img src= "wats.png" alt="logo 2" ></div>
   
    <p>&copy; 2023 My website</p>
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
