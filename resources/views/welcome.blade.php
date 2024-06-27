<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->

    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />

    <title>myBank</title>

    
<style>@import url('https://fonts.googleapis.com/css2?family=Public+Sans&display=swap');
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  font-family: 'Public Sans', sans-serif;
  font-size: 62.5%;
}
p {
  font-size: 1.6rem;
  line-height: 1.6;
  color: var(--grayish-blue);
}

section {
  padding: 5rem 0;
}
.container {
  width: 100%;
  max-width: 120rem;
  margin: 0 auto;
  padding: 0 2.5rem;
}

/* variables */
:root {
  --dark-blue: hsl(233, 26%, 24%);
  --lime-green: hsl(136, 65%, 51%);
  --bright-cyan: hsl(192, 70%, 51%);
  --grayish-blue: hsl(233, 8%, 62%);
  --light-grayish-blue: hsl(220, 16%, 96%);
  --very-light-grey: hsl(0, 0%, 95%);
  --white: hsl(0, 0%, 100%);
}

/* Utitlity */
.u-mb-sm {
  margin-bottom: 1.6rem;
}
.u-mb-md {
  margin-bottom: 3rem;
}
.u-mb-lg {
  margin-bottom: 5rem;
}
/*----------- Header-Section----------- */

header {
  width: 100%;
  height: 7.5rem;
  padding: 2.5rem 0;
  background-color: var(--white);
  position: relative;
  z-index: 999;
}

.logo {
  height: 2.3rem;
}
.check {
  display: none;
}
.hamburger {
  display: none;
}
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}
.nav-ul {
  display: flex;
  justify-content: center;
  align-items: center;
}

.nav-ul li {
  list-style: none;
  margin: 0 1.5rem;
}

li a {
  font-size: 1.6rem;
  text-decoration: none;
  color: var(--grayish-blue);
  padding-bottom: 2rem;
  position: relative;
}
li a:hover {
  color: var(--dark-blue);
}
nav ul li a::before {
  content: '';
  width: 100%;
  height: 0.3rem;
  position: absolute;
  left: 0;
  bottom: 0;
  background: linear-gradient(to right, var(--lime-green), var(--bright-cyan));
  opacity: 0;
  transform: scaleX(0);
  transform-origin: left;
  transition: all 0.3s;
}

nav ul li a:hover::before {
  opacity: 1;
  transform: scaleX(1);
}

.btn {
  font-size: 1.5rem;
  color: var(--white);
  font-weight: 700;
  text-decoration: none;
  padding: 1.3rem 3rem;
  background: linear-gradient(to right, var(--lime-green), var(--bright-cyan));
  border-radius: 5rem;
  opacity: 1;
  transform: scaleX(1);
  transition: 0.2s;
}

.btn:hover {
  opacity: 0.8;
  transform: scaleX(1.1);
}

.welcome-section {
  width: 100%;
  background-color: var(--very-light-grey);
}
.welcome {
  display: flex;
  flex-direction: column-reverse;
}
.welcome-image {
  display: inline-block;
  text-align: center;
  height: 38rem;
}
.welcome-image::before {
  content: '';
  position: absolute;
  top: -12rem;
  right: 0;
  width: 60rem;
  height: 70rem;
  background-image: url('/images/bg-intro-mobile.svg');
  background-repeat: no-repeat;
  background-size: cover;
}

.welcome-image img {
  width: 100%;
  height: 48rem;
  transform: translateY(-15rem);
}

.welcome-text {
  text-align: center;
}
.welcome-text h1 {
  font-size: 3.5rem;
  font-weight: normal;
  color: var(--dark-blue);
  line-height: 4.5rem;
}
.welcome-text h1 span {
  display: inline-block;
}
/* Media queries */

@media screen and (max-width: 832px) {
  nav .btn {
    display: none;
  }
  .hamburger {
    display: inline-block;
    position: absolute;
    top: 2rem;
    right: 2rem;
    cursor: pointer;
  }
  .hamburger img {
    width: 3rem;
  }
  .nav-ul {
    flex-direction: column;
    width: 90%;
    margin: 0 auto;
    padding: 1rem 0;
    margin-top: 4rem;
    background-color: var(--white);
    border: 1px solid skyblue;
    border-radius: 0.3rem;
    transform: translateY(-200%);
    transition: all 0.5s;
    z-index: 999;
  }
  .nav-ul li {
    padding: 1rem 0;
    font-size: 1.6rem;
  }
  li a {
    color: var(--dark-blue);
    font-weight: 400;
  }
  li a:hover {
    color: var(--lime-green);
  }
  nav ul li a:hover::before {
    opacity: 0;
  }
  #toggle:checked ~ .nav-ul {
    transform: translateY(1%);
  }
  #toggle:checked ~ .hamburger {
    border: 1px solid red;
    border-radius: 0.3rem;
    padding: 0.4rem;
  }
}

/*--------About Seciton-------------*/
.about-section {
  background-color: var(--light-grayish-blue);
  width: 100%;
  text-align: center;
}
.heading-secondary {
  font-size: 3rem;
  font-weight: normal;
  color: var(--dark-blue);
  line-height: 4.5rem;
}
.about-text {
  width: 100%;
  text-align: center;
}
.about-item {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
  row-gap: 1rem;
  column-gap: 1rem;
}
.about-item-box {
  display: inline-block;
  text-align: center;
}

.heading-teritary {
  font-size: 2rem;
  font-weight: normal;
  color: var(--dark-blue);
  line-height: 4.5rem;
}

/*--------Article Seciton-------------*/
.article-section {
  background-color: var(--very-light-grey);
}
.article {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
  row-gap: 4rem;
  column-gap: 2rem;
}
.article-box {
  background-color: var(--white);
  background-origin: 1px solid transparent;
  border-radius: 0.5rem;
  overflow: hidden;
}
.article-box img {
  width: 100%;
  height: 23rem;
}
.article-content {
  padding: 2rem;
}
.article-author {
  font-size: 1.2rem;
}
.article-heading {
  font: 1.7rem;
  font-weight: normal;
  color: var(--dark-blue);
}
.article-excerpt {
  font-size: 1.3rem;
}
/*------- Footer-------- */
footer {
  padding: 5rem 0;
  background-color: var(--dark-blue);
}
.footer {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
  row-gap: 4rem;
  column-gap: 2rem;
}
.footer-icon a {
  padding-right: 1rem;
}
.footer-links ul li {
  list-style: none;
  padding-bottom: 1.5rem;
}

.footer-links ul li a {
  color: var(--grayish-blue);
}
.footer-links ul li a:hover {
  color: var(--lime-green);
}

/*-------Animation up -------*/
.moveUp {
  animation: moveUp 0.8s linear;
}
@keyframes moveUp {
  0% {
    transform: translateY(100%);
  }
  50% {
    transform: translateY(50%);
  }
  100% {
    transform: translateY(0);
  }
}

/* From mobile to laptop */
@media screen and (min-width: 501px) and (max-width: 769px) {
  .welcome-image {
    display: inline-block;
    text-align: center;
    height: 38rem;
  }

  .welcome-image::before {
    top: -35rem;
    right: 0;
    width: 65rem;
    height: 83rem;
    background-image: url('/images/bg-intro-desktop.svg');
  }
  .welcome-image img {
    width: 70%;
    height: 48rem;
    transform: translateY(-15rem);
  }
}

/* From tablet to laptop */

@media screen and (min-width: 770px) {
  .welcome-section {
    padding: 3rem 0 3rem 0;
  }
  .welcome {
    flex-direction: row;
  }
  .welcome-image::before {
    display: none;
  }
  .welcome-text {
    text-align: left;
    padding-right: 25rem;
  }
  .welcome-image {
    width: 100%;
    position: relative;
  }
  .welcome-image img {
    position: absolute;
    width: 40rem;
    height: 65rem;
    top: -3rem;
    right: 0;
    z-index: 1;
  }
  /* Media Query for About section */
  .about-text {
    width: 50%;
    text-align: left;
  }
  .about-item-box {
    text-align: left;
  }
}
</style>
  </head>
  <body>
    <header>
      <div class="container">
        <nav>
          <!-- logo -->
          <h1 class="u-mb-sm">myBank</span></h1>
          <!-- icons -->
          <input type="checkbox" class="check" id="toggle" />
          <label for="toggle" id="hamburger" class="hamburger">
            <img src="./images/icon-hamburger.svg" alt="hamburger" />
          </label>

          <!-- ul links -->
          <ul class="nav-ul" id="nav-ul">
            <li class="nav-link"><a href="#">Home</a></li>
            <li class="nav-link"><a href="#about-section">About</a></li>
            <li class="nav-link"><a href="#article-section">Articles</a></li>
          </ul>

          <a href="{{ route('login') }}"  class="btn">Login</a>
        </nav>
      </div>
    </header>

    <!-- welcome section -->
    <section class="welcome-section">
      <div class="container welcome moveUp">
        <div class="welcome-text">
          <h1 class="u-mb-sm">Next generation <span>digital banking</span></h1>
          <p class="u-mb-lg">
            Take your financial life online. With <b>myBank</b>, you can manage your finances smarter with the latest technology, giving you easy access through our digital banking application. Join now to feel the difference!
          </p>
          <a href="{{ route('register') }}" class="btn">Register</a>
        </div>
        <div class="welcome-image">
          <img src="./images/image-mockups.png" alt="welcome-img" />
        </div>
      </div>
    </section>

    <!-- About-section -->
    <section class="about-section" id="about-section">
      <div class="container about moveUp">
        <div class="about-text">
          <h2 class="u-mb-sm heading-secondary">Why choose myBank?</h2>
          <p class="u-mb-lg">
          myBank is a financial institution that provides various financial services to the public, such as saving money, sending money, and facilitating other financial transactions.
          </p>
        </div>
        <div class="about-item">
          <div class="about-item-box">
            <img src="./images/icon-online.svg" alt="" class="u-mb-sm" />
            <h3 class="heading-tertiary u-mb-sm">Online Banking</h3>
            <p>
              Our modern web and mobile applications allow you to keep track of
              your finances wherever you are in the world.
            </p>
          </div>
          <div class="about-item-box">
            <img src="./images/icon-budgeting.svg" alt="" class="u-mb-sm" />
            <h3 class="heading-tertiary u-mb-sm">Simple Budgeting</h3>
            <p>
              See exactly where your money goes each month. Receive
              notifications when you’re close to hitting your limits.
            </p>
          </div>
          <div class="about-item-box">
            <img src="./images/icon-onboarding.svg" alt="" class="u-mb-sm" />
            <h3 class="heading-tertiary u-mb-sm">Fast Onboarding</h3>
            <p>
              We don’t do branches. Open your account in minutes online and
              start taking control of your finances right away.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="article-section" id="article-section">
      <div class="container">
        <div class="article-text">
          <h2 class="u-mb-sm heading-secondary">Latest Articles</h2>
          <p class="u-mb-lg">
            Get the latest news and updates on financial issues from our blog
          </p>
        </div>
        <div class="article">
          <div class="article-box">
            <img src="./images/image-currency.jpg" class="u-mb-sm" alt="" />
            <div class="article-content">
              <p class="article-author u-mb-sm">By Claire Robinson</p>
              <h4 class="article-heading u-mb-sm">
                Receive money in any currency with no fees
              </h4>
              <p class="article-excerpt">
                The world is getting smaller and we’re becoming more mobile. So
                why should you be forced to only receive money in a single …
              </p>
            </div>
          </div>
          <div class="article-box">
            <img src="./images/image-restaurant.jpg" class="u-mb-sm" alt="" />
            <div class="article-content">
              <p class="article-author u-mb-sm">By Wilson Hutton</p>
              <h4 class="article-heading u-mb-sm">
                Treat yourself without worrying about money
              </h4>
              <p class="article-excerpt">
                Our simple budgeting feature allows you to separate out your
                spending and set realistic limits each month. That means you …
              </p>
            </div>
          </div>
          <div class="article-box">
            <img src="./images/image-plane.jpg" class="u-mb-sm" alt="" />
            <div class="article-content">
              <p class="article-author u-mb-sm">By Wilson Hutton</p>
              <h4 class="article-heading u-mb-sm">
                Take your myBank card wherever you go
              </h4>
              <p class="article-excerpt">
                We want you to enjoy your travels. This is why we don’t charge
                any fees on purchases while you’re abroad. We’ll even show you …
              </p>
            </div>
          </div>
          <div class="article-box">
            <img src="./images/image-confetti.jpg" class="u-mb-sm" alt="" />
            <div class="article-content">
              <p class="article-author u-mb-sm">By Claire Robinson</p>
              <h4 class="article-heading u-mb-sm">
                Our invite-only Beta accounts are now live!
              </h4>
              <p class="article-excerpt">
                After a lot of hard work by the whole team, we’re excited to
                launch our closed beta. It’s easy to request an invite through
                the site ...
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer section -->

    <footer>
      <div class="container">
        <div class="footer">
          <div class="footer-icons">
            <div class="footer-logo u-mb-lg">
              <img src="./images/logo.svg" alt="" />
            </div>
            <a href="#"><img src="./images/icon-facebook.svg" alt="" /></a>
            <a href="#"><img src="./images/icon-youtube.svg" alt="" /></a>
            <a href="#"><img src="./images/icon-twitter.svg" alt="" /></a>
            <a href="#"><img src="./images/icon-pinterest.svg" alt="" /></a>
            <a href="#"><img src="./images/icon-instagram.svg" alt="" /></a>
          </div>
          <div class="footer-links">
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="footer-credit">
            <div class="u-mb-lg">
              <a href="{{ route('register') }}"  class="btn">Register</a>
            </div>
            <div class="footer-text">
              <p>© myBank. All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>