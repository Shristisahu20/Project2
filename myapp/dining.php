<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food Lover</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css2" />
  </head>
  <style>@import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap");
/* Base */
:root {
  --clr-primary: #fe5722;
  --clr-secondary: #272d36;
}

*,
*::after,
*::before {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  font-family: "Josefin Sans", sans-serif;
}

html {
  scroll-behavior: smooth;
}

body {
  background: #fff;
  color: var(--clr-secondary);
  overflow-x: hidden;
}

.section {
  width: 100%;
  padding: 40px 0;
}

.flex {
  display: flex;
  align-items: center;
  justify-content: center;
}

.container {
  padding: 0 30px;
}

.primary {
  font-size: 64px;
  font-weight: 700;
  margin-bottom: 20px;
}

.secondary {
  font-size: 44px;
  font-weight: 700;
  margin-bottom: 20px;
}

.tertiary {
  font-size: 24px;
  font-weight: 400;
  margin-bottom: 20px;
}

.btn {
  padding: 14px 20px;
  background: var(--clr-primary);
  border-radius: 4px;
  color: #fff;
  text-decoration: none;
  font-size: 22px;
  display: inline-block;
  margin: 20px 0;
}

/* End Base */

/* Menu */
nav {
  height: 80px;
  width: 100%;
  position: fixed;
  top: 0;
  background: #fff5f2;
  box-shadow: 0 1px 1px -1px rgba(0, 0, 0, 0.22);
  z-index: 22;
}

label.logo {
  font-size: 35px;
  line-height: 80px;
  padding: 0 30px;
  font-weight: 700;
}

nav ul {
  float: right;
  margin-right: 20px;
}

nav ul li {
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}

nav ul li a {
  font-size: 18px;
  padding: 7px 13px;
  text-decoration: none;
  color: var(--clr-secondary);
}

.menu a.active,
.menu a:hover {
  border-bottom: 2px solid var(--clr-primary);
  transition: 0.3s;
}

.checkbtn {
  font-size: 30px;
  color: #fff;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}

#check {
  display: none;
}
/* End Menu */

/* Hero Section */
#hero-section {
  background: #fff5f2;
  margin-top: 60px;
}

.text,
.visual {
  width: 50%;
}

.text {
  margin: 0 20px;
}

.visual img {
  width: 80%;
  height: auto;
  display: block;
}

#hero-section .text {
  margin-left: 30px;
}

#hero-section .visual img {
  margin-left: auto;
}
/* End Hero Section */

/* How It Works */
#how-it-works {
  width: 80%;
  margin: 0 auto;
  text-align: center;
}

.box {
  border: 1px solid #b2b2b2;
  padding: 25px 5px;
  margin: 0 10px;
  border-radius: 8px;
  font-size: 18px;
  transition: 0.3s ease;
  cursor: pointer;
}

.box ion-icon {
  font-size: 35px;
  color: var(--clr-primary);
  margin: 15px 0;
}

.box.active,
.box:hover {
  color: #fff;
  border-color: var(--clr-primary);
  background: var(--clr-primary);
}

.box.active ion-icon,
.box:hover ion-icon {
  color: #fff;
}
/* End How It Works */

/* About */
#about .visual img,
#app .visual img {
  margin-right: auto;
}
/* End About */

/* Restaurant Menu */
.category {
  list-style: none;
  text-align: center;
  margin: 20px 0 40px 0;
}

.category li {
  display: inline-block;
  margin: 0 15px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
}

.category li.active {
  color: var(--clr-primary);
}

.restaurant-menu {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
}

.menu-item {
  width: 260px;
  margin: 0 auto;
  border-radius: 6px;
  overflow: hidden;
}

.menu-item img {
  width: 100%;
}

.order {
  justify-content: space-between;
}

.btn-menu {
  padding: 6px 10px;
  font-size: 16px;
  text-align: center;
  background: #fff;
  border: 1px solid var(--clr-primary);
  color: var(--clr-primary);
}

.title {
  font-size: 18px;
  font-weight: 300;
  margin: 8px 0;
}

.location {
  font-size: 18px;
  font-weight: 500;
}
/* End Restaurant Menu */

/* Testimonial */
#testimonial .visual img {
  margin-left: auto;
}

.user {
  margin-top: 30px;
  justify-content: start;
}

.user img {
  width: 50px;
  border-radius: 50%;
  margin-right: 20px;
}
/* End Testimonial */

/* FAQ */
#faq .secondary {
  text-align: center;
}

.faq {
  width: 60%;
  margin: 50px auto 20px auto;
}

summary {
  padding: 1em;
  border: 1px solid #b2b2b2;
  margin-bottom: 1em;
  cursor: pointer;
  outline: none;
  border-radius: 0.3em;
  font-weight: 600;
}

details[open] summary ~ * {
  animation: open 1s ease-in-out;
}

@keyframes open {
  from {
    opacity: 1;
    margin-top: -10px;
  }

  top {
    opacity: 1;
    margin-top: 0;
  }
}
/* End FAQ */

/* App */
#app {
  text-align: center;
}

.app-store {
  background: #000;
  margin: 0 10px;
  padding: 4px 16px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 12px;
  color: #fff;
  cursor: pointer;
}

.app-store p {
  margin-top: 8px;
}

.app-store span {
  font-size: 16px;
  line-height: 25px;
}

.app-store ion-icon {
  font-size: 30px;
  margin-right: 10px;
}

.download {
  margin: 30px 0;
}
/* End App */

/* Footer */
.footer {
  background: var(--clr-secondary);
  color: #b2b2b2;
  padding: 30px 0;
}

.footer .container {
  justify-content: space-between;
  align-items: flex-start;
}

.footer h2 {
  font-size: 22px;
  margin-bottom: 10px;
  color: #fff;
}

.footer ul {
  list-style: none;
  line-height: 30px;
  font-size: 16px;
}

.footer ul li {
  cursor: pointer;
}

.footer-about {
  width: 35%;
}

.copyright {
  text-align: center;
  padding: 20px 0;
  margin-top: 30px;
  border-top: 1px solid #b2b2b2;
}
/* End Footer */

/* Responsive  */
@media (max-width: 952px) {
  label.logo {
    font-size: 30px;
    padding-left: 20px;
  }

  nav ul li a {
    font-size: 16px;
  }
}

@media (max-width: 858px) {
  .checkbtn {
    display: block;
    color: var(--clr-primary);
  }

  ul {
    position: fixed;
    width: 100%;
    height: 100vh;
    top: 80px;
    left: -100%;
    top: 80px;
    transition: all 0.5s;
    text-align: center;
    background: #fff5f2;
  }

  nav ul li {
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }

  nav ul li a {
    font-size: 20px;
  }

  .menu a:hover,
  .menu a.active {
    background: none;
    color: var(--clr-primary);
  }

  #check:checked ~ ul {
    left: 0;
  }

  #hero-section {
    margin-top: 80px;
  }

  #hero-section .text {
    margin-left: auto;
  }

  .flex {
    flex-direction: column;
  }

  .visual,
  .text {
    width: 70%;
    margin: 15px auto;
    text-align: center;
  }

  .download,
  .user {
    flex-direction: row;
  }

  .user {
    justify-content: center;
  }

  .visual img {
    margin: 0 auto;
  }

  .box {
    margin: 15px 0;
  }

  .restaurant-menu {
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 20px;
  }

  .faq,
  .menu-item {
    width: 80%;
  }

  .primary {
    font-size: 56px;
  }

  .secondary {
    font-size: 40px;
  }

  .tertiary {
    font-size: 20px;
  }

  .footer-about {
    width: 100%;
    text-align: center;
  }

  .quick-links,
  .get-in-touch,
  .footer-category {
    display: none;
  }
}

@media (max-width: 680px) {
  .container {
    padding: 0 10px;
  }

  .text,
  .visual {
    width: 90%;
  }

  .restaurant-menu {
    grid-template-columns: 1fr;
  }

  .faq {
    width: 90%;
  }

  .app-store {
    margin: 10px 0;
  }

  .download {
    flex-direction: column;
  }

  .primary {
    font-size: 48px;
  }

  .secondary {
    font-size: 32px;
  }

  .tertiary {
    font-size: 17px;
  }
}
/* End Responsive  */





.youtube {
  position: fixed;
  bottom: 40px;
  right: 70px;
  text-decoration: none;
  padding: 8px 12px;
  background: rgba(0,0,0,0.6);
  border-radius: 6px;
  box-shadow: 0 2px 2px 3px rgba(0, 0, 0, 0.2);
  color: #fff;
}

.youtube p {
  font-size: 22px;
}

    </style>

  <body>
    <!-- Menu -->
    <div class="menu">
      <nav>
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
          <ion-icon name="grid-outline"></ion-icon>
        </label>

        <label class="logo">Dining ,Luxorious Hotel</label>

        <ul>
          <li><a href="home.php" class="active">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#testimonial">Reviews</a></li>
          <li><a href="#app">Download App</a></li>
        </ul>
      </nav>
    </div>
    <!-- End Menu -->

    <!-- Hero Section -->
    <div class="section flex" id="hero-section">
      <div class="text">
        <h1 class="primary">
          It's Not Just Food, <br />
          It's an <span>Experience</span>
        </h1>

        <p class="tertiary">
        Luxorious Hotel Nairobi has continued to stirred up the local culinary scene with two restaurants, two bars and a 24-hr coffee shop that cater to the needs of our diverse clientele, offering delectable experiences and divine memories. 
        Each dining experience provides our guests with a taste of a broad selection of international and local cuisine.<br>

        <a href="home.php" class="btn">Explore More</a>
      </div>
      <div class="visual">
        <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/home-banner.png" alt="" />
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- How It Works -->
    <div class="section" id="how-it-works">
      <h2 class="secondary">How It Works</h2>

      <div class="container flex">
        <div class="box">
          <h3>Easy Order</h3>
          <ion-icon name="timer-outline"></ion-icon>
          <p>
            you can order easily the Food
            from our app.
          </p>
        </div>

        <div class="box active">
          <h3>Best Quality</h3>
          <ion-icon name="trophy-outline"></ion-icon>
          <p>
            Luxorious Hotel dining serve best quality in the food.
          </p>
        </div>

        <div class="box">
          <h3>Fast Delivery</h3>
          <ion-icon name="checkmark-done-circle-outline"></ion-icon>
          <p>
          It always ensure easy and fast delivery at work.
          </p>
        </div>
      </div>
    </div>
    <!-- End How It Works -->

    <!-- About -->
    <div class="section" id="about">
      <div class="container flex">
        <div class="visual">
          <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/about.png" alt="" />
        </div>
        <div class="text">
          <div class="secondary"><a href="about.php"> Luxorious Hotel</a></div>
          <h2 class="primary">150+</h2>

          <h3 class="tertiary">Our Delicious Food</h3>

          <p>
            One tasted the food and can not stop herself to be finished in minutes.serves more delicious food.
          </p>

          <a href="home.php" class="btn">Explore More</a>
        </div>
      </div>
    </div>
    <!-- End About -->

    <!-- Restaurant Menu -->
    <div class="section" id="menu">
      <div class="container">
        <ul class="category">
          <li class="active">All</li>
          <li>Biryani</li>
          <li>momos</li>
          <li>Pizza</li>
          <li>Burger</li>
          <li>Pasta</li>
        </ul>

        <div class="container">
          <div class="restaurant-menu">
            <div class="menu-item">
              <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-1.jpg" alt="" />

              <div class="title">Food Restaurant | Chineese & Thai</div>

              <div class="location">Nairobi</div>

              <div class="order flex">
                <div class="price">1500/-</div>
                <a href="#" class="btn btn-menu">Order Now</a>
              </div>
            </div>

            <div class="menu-item">
              <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-2.jpg" alt="" />

              <div class="title">Food Restaurant | Chineese & Thai</div>

              <div class="location">Nairobi</div>

              <div class="order flex">
                <div class="price">1250/-</div>
                <a href="#" class="btn btn-menu">Order Now</a>
              </div>
            </div>

            <div class="menu-item">
              <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-3.jpg" alt="" />

              <div class="title">Food Restaurant | Chineese & Thai</div>

              <div class="location">Nairobi</div>

              <div class="order flex">
                <div class="price">2500/-</div>
                <a href="#" class="btn btn-menu">Order Now</a>
              </div>
            </div>

            <div class="menu-item">
              <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-4.jpg" alt="" />

              <div class="title">Food Restaurant | Chineese & Thai</div>

              <div class="location">Nairobi</div>

              <div class="order flex">
                <div class="price">3500/-</div>
                <a href="#" class="btn btn-menu">Order Now</a>
              </div>
            </div>

            <div class="menu-item">
              <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-5.jpg" alt="" />

              <div class="title">Food Restaurant | Chineese & Thai</div>

              <div class="location">Nairobi</div>

              <div class="order flex">
                <div class="price">1250/-</div>
                <a href="#" class="btn btn-menu">Order Now</a>
              </div>
            </div>

            <div class="menu-item">
              <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-6.jpg" alt="" />

              <div class="title">Food Restaurant | Chineese & Thai</div>

              <div class="location">Nairobi</div>

              <div class="order flex">
                <div class="price">2000/-</div>
                <a href="#" class="btn btn-menu">Order Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Restaurant Menu -->

    <!-- Testimonial -->
    <div class="section" id="testimonial">
      <div class="container flex">
        <div class="text">
          <h2 class="secondary">What people say about Luxorious Hotel dining</h2>
          <p>"One survey is conducted in the region and people say about only positive things 
            they always suggest our hotel dining for food,they seems very good taste in our list."
           
          </p>

          <div class="user flex">
            <img src="luxi.jpg" alt="" />

            <div class="name">
              <div class="title">Luxorious Hotel</div>
              <div class="location">Nairobi</div>
            </div>
          </div>
        </div>
        <div class="visual">
          <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/testimonial.png" alt="" />
        </div>
      </div>
    </div>
    <!-- End Testimonial -->

    <!-- FAQ -->
    <div class="section" id="faq">
      <h2 class="secondary">Frequently Asked Questions</h2>

      <div class="faq">
        <details>
          <summary>I got wrong food what shoud I do?</summary>
          <div class="content">
            <p>
             You can complain about that and if want you can get any food free.
            </p>
          </div>
        </details>

        <details>
          <summary>I got wrong food what shoud I do?</summary>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Asperiores amet sunt at?
            </p>
          </div>
        </details>

        <details>
          <summary>I got wrong food what shoud I do?</summary>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Asperiores amet sunt at?
            </p>
          </div>
        </details>

        <details>
          <summary>I got wrong food what shoud I do?</summary>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Asperiores amet sunt at?
            </p>
          </div>
        </details>
      </div>
    </div>
    <!-- End FAQ -->

    <!-- App -->
    <div class="section" id="app">
      <div class="container flex">
        <div class="visual">
          <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/app.png" alt="" />
        </div>

        <div class="text">
          <h2 class="secondary">Download The Luxorious Hotel App</h2>
          <p>
          Luxorious Hotel oﬀers dining at its best with the freshest ﬂavors of locally sourced produce. It oﬀers a selected buﬀet breakfast, all day a-la-carte and snack dining, ﬂowing coﬀee/tea dispenser and 24 hour room service.

          Spread out over the ground ﬂoor, the Galaxy (150 covers) showcases the ﬁnest cuisine, complete with live show kitchen and outdoor terrace overlooking the pool.
          </p>

          <div class="download flex">
            <div class="app-store">
              <ion-icon name="logo-google-playstore"></ion-icon>
              <p>
                GET IT ON <br />
                <span>Google Play</span>
              </p>
            </div>

            <div class="app-store">
              <ion-icon name="logo-apple"></ion-icon>
              <p>
                Donload on the <br />
                <span>App Store</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End App -->

    <!-- Footer -->
    <div class="footer">
      <div class="container flex">
        <div class="footer-about">
          <h2>About</h2>
          <p>
          Welcome to Luxorious, a contemporary style hotel that provides all the comfort, convenience and efficiency to the discerning traveler. 
          Ideally located along Mombasa road in Nairobi the capital city of Kenya, Luxorious Hotel Nairobi features 167 well-appointed rooms, five meeting & conference rooms, restaurant & bar, gym, swimming pool, gift shop,
           wellness center among other top facilities offering the best choice venue for your Business and Leisure stay.
          </p>
        </div>

        <div class="footer-category">
          <h2>Our Menu</h2>

          <ul>
            <li>Biryani</li>
            <li>Chicken</li>
            <li>Pizza</li>
            <li>Burger</li>
            <li>Pasta</li>
          </ul>
        </div>

        <div class="quick-links">
          <h2>Quick Links</h2>

          <ul>
            <li>About Us</li>
            <li>Contact Us</li>
            <li>Menu</li>
            <li>Order</li>
            <li>Services</li>
          </ul>
        </div>

        <div class="get-in-touch">
          <h2>Get in touch</h2>
          <ul>
            <li>Account</li>
            <li>Support Center</li>
            <li>Feedback</li>
            <li>Suggession</li>
          </ul>
        </div>
      </div>

      <div class="copyright">
        <p>&copy; 2023 Luxorious Hotel.</p>
      </div>
    </div>
    
           <!--   BTN   -->
    <a href="https://youtu.be/X_lhcF1W8nc?si=ooKwdnzjqCjD0BCr" class="youtube" target="__blank">
  <p>Watch Tutorial 🔥</p>
</a>
    <!-- End Footer -->

    <!-- Ion Icons Js -->
    <script
      type="module"
      src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"
    ></script>
    <script
      nomodule
      src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"
    ></script>
  </body>
</html>
