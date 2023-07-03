

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
          <div class="icons"> 
            <a href="/login"> <i class="fa fa-user"></i> 
            </a>
            </div>
          <div class="icons">
              <a href="/">
                <i class="fa fa-shopping-cart"></i>
              </a> 
            </div>
        </div>
      </div>
      <div class="nav">
        <a href="/welcome">Welcome</a>
         <p class="dot">&#183;</p> 
        
        <a >Home</a>
         <p class="dot">&#183;</p>
        
        <a  href="/lips">Lips</a> 
        <p class="dot">&#183;</p>
       
        <a>Sets</a> 
        <p class="dot">&#183;</p>
        
        <a>About Us</a>
        
      </div>
    </div>

    <div class="content">
    
      <div class="hero">
        <div class="hero-div">
          <img class="hero-img" src="../../assets/css/images/hero-image.jpg">
          <img class="hero-img-hidden" src="../../assets/css/images/hero-im.jpg">
          <img class="hero-img-hidden2" src="../../assets/css/images/hero-ig.jpg">
        </div>
      </div>
      <div class="best">
        <div class="bestselling">
          <h3 > DISCOVER OUR BESTSELLING PRODUCTS</h3>
        </div>
       
      </div>
     
      <div class="bestselling-products">
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/brush.jpg">
            <div class="bestselling-text">La mousse de rouge Maroon</div>
            <div class="bestselling-text">$25,00</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/daphne.jpg">
            <div class="bestselling-text">La mousse de rouge Daphne</div>
            <div class="bestselling-text">$25,00</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/cafe-gourmand.jpg">
            <div class="bestselling-text">Le set cafe cafe-gourmand</div>
            <div class="bestselling-text">$75,00</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/frambroise.jpg">
            <div class="bestselling-text">La mousse de rouge Hortenese</div>
            <div class="bestselling-text">$25,00</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/rosier.jpg">
            <div class="bestselling-text">La mousse de rouge Rosier</div>
            <div class="bestselling-text">$25,00</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/nude-pencils.jpg">
            <div class="bestselling-text">Les Nudes crayons</div>
            <div class="bestselling-text">$35,00</div>
        </div>
    </div>

      <div>
        <div class="quote-div">
          <div class="qdiv">
            <img class="quote" src="../../assets/css/images/quote.jpg">
          </div>

          <div class="best">
        <div class="bestselling">
          <h3 > DISCOVER OUR SETS</h3>
        </div>
       
      </div>
     
      <div>
        <div class="bestselling-products">
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/brush.jpg">
            <div class="bestselling-text">La mousse de rouge Maroon</div>
            <div class="bestselling-text">$25,00</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/set.jpg">
            <div class="bestselling-text">La mousse de rouge Daphne</div>
            <div class="bestselling-text">$25,00</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/set1.jpg">
            <div class="bestselling-text">Le set cafe cafe-gourmand</div>
            <div class="bestselling-text">$75,00</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/set3.jpg">
            <div class="bestselling-text">La mousse de rouge Hortenese</div>
            <div class="bestselling-text">$25,00</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/set4.jpg">
            <div class="bestselling-text">La mousse de rouge Rosier</div>
            <div class="bestselling-text">$25,00</div>
        </div>
        <div class="bestselling-detail">
            <img class="bestselling-shampoo" src="../../assets/css/images/lip.jpg">
            <div class="bestselling-text">Les Nudes crayons</div>
            <div class="bestselling-text">$35,00</div>
        </div>
    </div>
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
          <br>
              Enter your email:
          <input class="email" type="text">
          </p>
          
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

  /* header */

  .content {
    flex: 1;
    overflow-y: auto;
    overflow-x: hidden;
  }

  .wrapper {
    width: 100%;
  }

  .hero{
    height: 350px;
    width:100%;
  }

  .hero-div {
    position: relative;
    height: 350px;
    padding: 2%;
    background-color: #EFE7DA;
    margin: 0;
    overflow: hidden;
    
  }

  .hero-img {
    /* width: 100%;
    height: 100%;
    object-fit: cover; */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;  
    animation: hero-transition 10s infinite;
  }

  .hero-img-hidden{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    animation: hero-transition 20s infinite;
  }

  .hero-img-hidden2{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    animation: hero-transition 25s infinite;
  }

  @keyframes hero-transition {
    0% {
    opacity: 1;
  }
  
  25% {
    opacity: 0;
  }
 
  50% {
    opacity: 1;
  }
  
  70% {
    opacity: 0;
  }
  
  100% {
    opacity: 1;
  }
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
    font-weight: 600;
    
  }

  .header-icons {
    display: flex;
    align-items: center;
    margin-left: 1%;
    margin-right: 2%;
    gap: 10px;
  }

  .icons {
    margin: 0 5px; /* Adjust the margin as per your preference */
  }

  .icons a{
    color: black;
  }

  .dot{
    font-size: 20px;
    font-weight: 800;
    margin: 0;
    padding: 0;
  }

  /* body */

  .best{
    height: 130px;
  
  }

  .bestselling{
    padding: 23px 0;
    width: 100%;
    height: 100%;
    margin-top: 18px;
  }

  .bestselling h3 {
    background-color: #EFE7DA;
    text-align: center;
    font-size: 30px;
    font-weight: 700;
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

  

  .bestselling-detail{
    height: 350px;
    width: 370px;
  }

  .bestselling-shampoo {
    width: 370px;
    height: 100% !important;
    
}

    .bestselling-text {
      text-align: center;
      font-weight: 600;
      padding: 5px;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .bestselling-detail:hover .bestselling-text {
      opacity: 1;
    }




  /* footer */

  .qdiv{
    width: 100%;
  }

  .quote{
    width: 100%;
    object-fit: contain;
  }

  .quote-div {
    position: relative;
  }

  

  .about-us {
    position: absolute;
    top: 25%;
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
    margin: 10px 0;
    padding-top: 1px;
    padding-bottom: 5px;
    height: 100px;
    background-color: #EFE7DA;
    position: relative;
  }

  .newsletter p {
    margin: 10px 0;
    text-align: center;
  }

  .email {
    border: none;
    height: 20px;
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
    margin-bottom: 15px;
    
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
    gap: 10px
  }

  .right-footer {
    display: flex;
    justify-content: space-evenly;
    margin-left: 5px;
    width: 200px;
    gap: 10px;
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



