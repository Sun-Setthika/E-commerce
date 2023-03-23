<!-- <script setup>
import TheWelcome from '../components/TheWelcome.vue'
</script>

<template>
  <main>
    <TheWelcome />
  </main>
</template> -->

<script>


</script>

<template>
  <div class="body">
    <div>
      <div class="header">
        <div class="header-icons">
          <div class="icons">  <i class="fa fa-bars"></i> </div>
          <div class="icons">  <i class="fa fa-search"></i> </div>
        </div>
        <h1>Paris Cosmetic</h1>
        <div class="header-icons">
          <div class="icons">  <i class="fa fa-user"></i> </div>
          <div class="icons">  <i class="fa fa-shopping-cart"></i> </div>
        </div>
      </div>
      <div class="nav">
        <a>Home</a>
        <a>Lips</a>
        <a>Sets</a>
        <a>About Us</a>
      </div>
    </div>

    <div>
      <div class="hero-div">
        <img class="hero-img" src="../assets/css/images/hero-image.jpg">
        <img class="hero-img" src="../assets/css/images/hero-im.jpg">
      </div>
      <div class="best">
        <h3 class="bestselling"> Discover our Bestselling Products</h3>
      </div>
      <div class="div-products"> 
        <img class="product" src="../assets/css/images/cafe-gourmand.jpg">
        <img class="product"  src="../assets/css/images/daphne.jpg">
        <img class="product" src="../assets/css/images/brush.jpg">
        <img class="product" src="../assets/css/images/rosier.jpg">
        <img class="product" src="../assets/css/images/winter-red.jpg">
        <img class="product" src="../assets/css/images/nude-pencils.jpg">
        <img class="product" src="../assets/css/images/frambroise.jpg">
      </div>

      <div>
        <div class="quote-div">
          <img class="quote" src="../assets/css/images/quote.jpg">
          <div class="about-us"><button class="btn-about-us">About us</button></div>
          <p> Get <span class="discount">10% off </span> your first purchase </p>
        </div>
        <!-- <p> Get <span>10% off </span> your first purchase </p> -->
        <div class="feedback">
          <i class="fa fa-user"></i>
          <p>  a Mousse de Rouge, our signature product with a creamy texture and velvet finish, 
          accompanied by our double-ended Lip Brush.</p>
          <img src="../assets/css/images/nude-and-red.jpg">
        </div>
        <div class="newsletter">
          <p> Stay in touch to join our newsletter 
          <br>  Enter your email:
          <input class="email" type="text">
          </p>
          
          <!-- <p> Enter your email: </p> -->
          <button class="btn-subscribe"> Subscribe</button>
        </div>  
        <hr>
      </div>
    </div>

    <div class="footer">
     
      <div class="right-footer">
        <a>CONTACT US</a>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
      </div>
      <div class="left-footer">
        <i class="fa fa-cc-mastercard"></i>
        <i class="fa fa-cc-visa"></i>
        <i class="fa fa-paypal"></i>
      </div>
    </div>
  </div>
</template>


<style>
@media (min-width: 900px) {  
  .hero-div{
    height: 400px;
    padding: 2%;
    background-color: #EFE7DA;
  }
  .hero-img{
    width: 100%;
    height: 100%;
  }
  .div-products{
    display: flex;
    justify-content: space-between;
    height: 550px;
    overflow-y: auto;
    background-color: #EFE7DA;
    margin-top: 0;
  }
  .product{
    margin-left: 3%;
    width: 40%;
    height: 90%;
  }
}
.body{
  width: 100vw;
  height: 100vh;
}
.header {
    width: 100%;
    min-height: 20%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #F6F5EC;
  }
  .nav{
    width: 100%;
    align-items: center;
    background-color: #F6F5EC;
    display: inline-flex;
    justify-content: center;
    gap: 10px;

  }
  .icons{
   padding-left: 10%;
   padding-right: 10%;
  }
  .header-icons{
    display: flex;
    margin-left: 1%;
    margin-right: 2%;
    
  }
  .h1{
    width: 400px;
  }
  .hero-img{
    width: 100%;
    height: 50%;
    position: absolute;
    top: 22%;
    left: 10%;
    
  }
  .hero-div{
    height: 300px;
    padding: 2%;
    background-color: #EFE7DA;
    overflow: hidden;
  }
  @keyframes slide-left {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-1500px);
  }
}

.hero-div img:first-child {
  animation: slide-left 10s ease-in-out infinite;
}

.hero-div img:last-child {
  animation: slide-left 10s ease-in-out 10s infinite;
}

  .bestselling{
    background-color: #EFE7DA;
    text-align: center;
    height: 40px;
    padding-top: 14px;
    margin-bottom: 0;
  }
  .div-products{
    display: flex;
    justify-content: space-between;
    height: 350px;
    overflow-y: auto;
    background-color: #EFE7DA;
    margin-top: 0;
  }
  .product{
    margin-left: 3%;
    width: 40%;
    height: 90%;
  }
  .quote{
    width: 100vw;
  }
  .quote-div{
    position: relative;
  }
  .about-us{
    position: absolute;
    top: 60%;
    left: 85%;
  }
  .btn-about-us{
    width: 100px;
    border-radius: 30px;
    background-color: #EFE7DA;
    padding: 10px;
    border: 2px solid #EFE7DA;
  }
  .quote-div p{
    margin-top: 15px;
    background-color: black;
    color: white;
    height: 35px;
    text-align: center;
    padding-top: 8px;
  }
  .discount{
    font-size: 20px;
    padding-left: 0 3px;
  }
  .feedback{
    display: flex;
    justify-content: space-between;
    height: 100px;
  }
  .feedback img{
    width: 100px;
    height: 100px;
  }
  .feedback p{
    width: 500px;
  }
  .feedback i{ 
    margin-top: 3%;
    margin-left: 5%;
 
  }
  .newsletter{
    margin-top: 8px;
    padding-top: 1px;
    padding-bottom: 2px;
    height: 60px;
    background-color: #EFE7DA;
    position: relative;
  }
  .newsletter p{
    padding-bottom: 5px;
    margin-bottom: 1px;
    text-align: center; 
  }
  .email{
    border: none;
  }
  .btn-subscribe{
    top: 30%;
    left: 70%;
    position: absolute;
    width: 100px;
    border-radius: 30px;
    background-color: #EFE7DA;
    padding: 10px;
    border: 1px solid black;
  }
  .footer{
    height: 30px;
    display: flex;
    justify-content: space-between;
  }
  .left-footer{
    display: flex;
    justify-content: space-evenly;
    margin-left: 8px;
    width: 100px;
  }
  .right-footer{
    display: flex;
    justify-content: space-evenly;
    margin-left: 5px;
    width: 200px;
  }
  

  
</style>
