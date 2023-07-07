<script>
  import axios from 'axios';

export default {
  name: 'Cart',
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
    <div>
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
        
        <a href="/" >Home</a>
         <p class="dot">&#183;</p>
        
        <a  href="/lips">Lips</a> 
        <p class="dot">&#183;</p>
       
        <a>Sets</a> 
        <p class="dot">&#183;</p>
        
        <a>About Us</a>
        
      </div>
    </div>

    <!-- content -->
    <div class="content">
        <div class="cart">
            <h3> Your Cart </h3>
            <hr>
            <div class="cart-header">
                <p> Item </p>
                <p> Price </p>
                <p> Quantity </p>
            </div>
            <div class="cart-items">
              <div class="cart-details">
                <div class="product-img">
                <img src="../assets/css/images/framboise.jpg" class="cart-product">
                <div class="product-desc">
                    <div class="cart-text">La mousse de rouge Framboise</div>
                    <div class="cart-text"> Color: Framboise </div>
                </div>
                
                </div>
                <div class="price"> $20.00</div>
                <div class="quantity"> 1 </div>
            </div>

            <div class="cart-details">
                <div class="product-img">
                <img src="../assets/css/images/framboise.jpg" class="cart-product">
                <div class="product-desc">
                    <div class="cart-text">La mousse de rouge Framboise</div>
                    <div class="cart-text"> Color: Framboise </div>
                </div>
                
                </div>
                <div class="price"> $20.00</div>
                <div class="quantity"> 1 </div>
            </div>

            <div class="cart-details">
                <div class="product-img">
                <img src="../assets/css/images/framboise.jpg" class="cart-product">
                <div class="product-desc">
                    <div class="cart-text">La mousse de rouge Framboise</div>
                    <div class="cart-text"> Color: Framboise </div>
                </div>
                
                </div>
                <div class="price"> $20.00</div>
                <div class="quantity"> 1 </div>
            </div>

            <div class="cart-details">
                <div class="product-img">
                <img src="../assets/css/images/framboise.jpg" class="cart-product">
                <div class="product-desc">
                    <div class="cart-text">La mousse de rouge Framboise</div>
                    <div class="cart-text"> Color: Framboise </div>
                </div>
                
                </div>
                <div class="price"> $20.00</div>
                <div class="quantity"> 1 </div>
            </div>
            </div>
            

            <hr>
            <div class=subtotal>
                <div class="cart-text"> Subtotal:  </div>
                <div class="cart-text"> $20.00 </div>
            </div>
            <hr>
        </div>
        <div class="summary">
            <h3> Summary </h3>
            <hr>
            <div class=" summary-details">
              <p> Subtotal </p>
              <p> $20.00 </p>
            </div>
            <div  class=" summary-details">
              <p> Shipping </p>
              <p> - </p>
            </div>
            <div  class=" summary-details">
              <p>Taxes </p>
              <p> - </p>
            </div>
            <hr>
            <div class="summary-details">
              <p> Total </p>
              <p> $20.00 </p>
            </div>
            <router-link to="/checkout">
              <button class="btn"> Checkout </button>
          </router-link>
        </div>



    </div>
    <hr>
    <!-- footer  -->
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

<style scoped>

  hr{
    height: 2px;
    background-color: black;
  }
  .content{
    margin: auto;
    padding: 0 30px;
    height: 520px;
    display: flex;
    justify-content: space-between;
    column-gap: 20px;
    overflow-y: hidden;
  }

  h3{
    font-size: 25px;
  }
  /* cart */
  .cart-product {
    width: 200px; /* Adjust the percentage value to shrink the image */
    height: 200px;
  }

  .cart{
    width: 60%;
  }

  .product-img{
    display: flex;
    justify-content: space-between;
    width: 380px;
    column-gap: 20px;
    align-items: center;
  }

  .cart-header{
    display: grid;
    grid-template-columns: 3fr 1fr 1fr;
    font-size: 20px;
    font-weight: bold;
    
  }

  .cart-details{
    display: grid;
    grid-template-columns: 3fr 1fr 1fr;
    align-items: center;
    margin-bottom: 15px;
   
  }

  .cart-items{
    overflow-y: auto;
    max-height: 200px;
  }

  .cart-text{
    margin: 5px;
    font-size: 18px;
    font-weight: bold;
  
    
  }
  .product-desc{
    display: flex;
    flex-direction: column;
    
  }

  .quantity {
   padding: 0 20px;
   font-weight: bold;
   font-size: 20px;
  }

  .price{
    font-weight: bold;
    font-size: 20px;
  }

  .subtotal{
    display: flex;
    justify-content: end;
    padding-right: 15px;
  }

  /* summary */
  .summary{
    width: 40%;
    background-color: #EFE7DA;
    margin-top: 70px;
    padding: 20px;
    position: sticky; 
    bottom: 0;
    height: 400px;
  }

  .summary p{
    font-weight: 500;
    font-size: 16px;
  }

  .summary hr{
    height: 2.2px;
    font-weight: bold;
  }

  .summary-details{
    display: flex;
    justify-content: space-between;
    margin-bottom: -5px;
  }

  .btn{
    width: 320px;
    border-radius: 30px;
    padding: 8px;
    color: white;
    background-color: black;
    padding: 10px;
    margin: 0 90px;
    font-weight: bold;
    height: 40px;
    font-size: medium;
    
  }

  .btn:hover{
    background-color: white;
    color: black;
    border: white;
    font-weight: bold;
  }
  
  


  
  
  


</style>

