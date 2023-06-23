<!-- <script setup>
import TheWelcome from '../components/TheWelcome.vue'
</script>

<template>
  <main>
    <TheWelcome />
  </main>
</template> -->

<script>
  import axios from 'axios';

export default {
  name: 'HomeView',
  data() {
    return {
      jsonData: null,
    };
  },
  mounted() {
    axios
      .get('http://localhost:3000/api/data')
      .then(response => {
        this.jsonData = response.data;
      })
      .catch(error => {
        console.error(error);
      });
  },
};

</script>

<template>
  <div class="body">
    <div class="wrapper">
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

    <div class="content">
    
      <div class="hero-div">
        <img class="hero-img" src="../../assets/css/images/hero-image.jpg">
        <!-- <img class="hero-img" src="../../assets/css/images/hero-im.jpg"> -->
      </div>
      <div class="best">
        <h3 class="bestselling"> Discover our Bestselling Products</h3>
      </div>
     
      <div class="bestselling-products">
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/brush.jpg">
            <div class="bestselling-text">Product name</div>
            <div class="bestselling-text">Price</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/daphne.jpg">
            <div class="bestselling-text">Product name</div>
            <div class="bestselling-text">Price</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/cafe-gourmand.jpg">
            <div class="bestselling-text">Product name</div>
            <div class="bestselling-text">Price</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/frambroise.jpg">
            <div class="bestselling-text">Product name</div>
            <div class="bestselling-text">Price</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/rosier.jpg">
            <div class="bestselling-text">Product name</div>
            <div class="bestselling-text">Price</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/nude-pencils.jpg">
            <div class="bestselling-text">Product name</div>
            <div class="bestselling-text">Price</div>
        </div>
    </div>

      <div>
        <div class="quote-div">
          <div class="qdiv">
            <img class="quote" src="../../assets/css/images/quote.jpg">
          </div>
          <div class="about-us"><button class="btn-about-us">About us</button></div>
          <p> Get <span class="discount">10% off </span> your first purchase </p>
        </div>
        <!-- <p> Get <span>10% off </span> your first purchase </p> -->
        <div class="feedback">
          <i class="fa fa-user"></i>
          <p>  a Mousse de Rouge, our signature product with a creamy texture and velvet finish, 
          accompanied by our double-ended Lip Brush.</p>
          <img src="../../assets/css/images/nude-and-red.jpg">
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

  </div>
</template>


<style>
  * {
    box-sizing: border-box;
  }

  html, body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }

  .body {
    height: 100vh;
    display: flex;
    flex-direction: column;
  }

  .content {
    flex: 1;
    overflow-y: auto;
    overflow-x: hidden;
  }

  .wrapper {
    width: 100%;
  }

  .hero-div {
    height: 350px;
    padding: 2%;
    background-color: #EFE7DA;
    margin: 0;
  }

  .hero-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .qdiv{
    width: 100%;
  }

  .quote{
    width: 100%;
    object-fit: contain;
  }

  .body,
  .header,
  .nav {
    width: 100%;
    background-color: #F6F5EC;
  }

  .header {
    min-height: 20vh;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
  }

  .header-icons {
    display: flex;
    align-items: center;
    margin-left: 1%;
    margin-right: 2%;
  }

  .icons {
    margin: 0 5px; /* Adjust the margin as per your preference */
  }

  .bestselling {
    background-color: #EFE7DA;
    text-align: center;
    height: 40px;
    padding-top: 14px;
    margin-bottom: 0;
  }

  .bestselling-products {
    display: flex;
    padding-left: 57px;
    padding-right: 57px;
    column-gap: 120px;
    margin-bottom: 30px;
    white-space: nowrap; 
    overflow: scroll
}

.bestselling-shampoo {
    width: 272px;
    height: 270px;
    
}

  .quote-div {
    position: relative;
  }

  

  .about-us {
    position: absolute;
    top: 60%;
    left: 85%;
  }

  .btn-about-us {
    width: 150px;
    border-radius: 30px;
    background-color: #EFE7DA;
    padding: 10px;
    border: 2px solid #EFE7DA;
  }

  .quote-div p {
    margin-top: 15px;
    background-color: black;
    color: white;
    height: 35px;
    text-align: center;
    padding-top: 8px;
  }

  .discount {
    font-size: 20px;
    padding-left: 0 3px;
  }

  .feedback {
    display: flex;
    justify-content: space-between;
    height: 100px;
  }

  .feedback img {
    width: 100px;
    height: 100px;
    object-fit: cover;
  }

  .feedback p {
    width: 500px;
  }

  .feedback i {
    margin-top: 3%;
    margin-left: 5%;
  }

  .newsletter {
    margin-top: 8px;
    padding-top: 1px;
    padding-bottom: 2px;
    height: 60px;
    background-color: #EFE7DA;
    position: relative;
  }

  .newsletter p {
    padding-bottom: 5px;
    margin-bottom: 1px;
    text-align: center;
  }

  .email {
    border: none;
  }

  .btn-subscribe {
    top: 30%;
    left: 70%;
    position: absolute;
    width: 100px;
    border-radius: 30px;
    background-color: #EFE7DA;
    padding: 10px;
    border: 1px solid black;
  }

  .footer {
    height: 30px;
    display: flex;
    justify-content: space-between;
  }

  .left-footer {
    display: flex;
    justify-content: space-evenly;
    margin-left: 8px;
    width: 100px;
  }

  .right-footer {
    display: flex;
    justify-content: space-evenly;
    margin-left: 5px;
    width: 200px;
  }

  @media(min-height: 200px) and (max-height: 450px) {
    .div-products {
    display: flex;
    justify-content: space-between;
    height: 400px; /* Adjust the height as per your preference */
    background-color: #EFE7DA;
    margin-top: 0;
    overflow-y: hidden;
  }

 
}

</style>

