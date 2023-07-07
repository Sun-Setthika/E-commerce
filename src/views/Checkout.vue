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
            <p class="path"> Cart > <span class="customer-info"> Customer Information </span> > Shipping Information > Payment method </p>
            <hr>
            <h3> Customer Information </h3>
            

            <form>
              <input type="email" name="email" class="input-line" placeholder="Email">
              <hr>
              <h3> Shipping Information </h3>
              <div class="customer-name">
                <input type="name" name="email" class="input-line" placeholder="Firstname">
                <input type="name" name="email" class="input-line" placeholder="Lastname">
              </div>
              <div class="customer-name">
                <input type="name" name="email" class="input-line" placeholder="Company(Optional)">
              </div>
              <div class="customer-name">
                <input type="name" name="email" class="input-line" placeholder="Address">
                <input type="name" name="email" class="input-line" placeholder="Apt.Optional">
              </div>
              <!-- <div class="customer-name">
                <input type="name" name="email" class="input-line" placeholder="Country">
                <input type="name" name="email" class="input-line" placeholder="State">
                <input type="name" name="email" class="input-line" placeholder="Zip">
              </div> -->

              <div class="customer-name">
                <select class="input-line" name="country" placeholder="Country">
                  <option value="" disabled selected>Select Country</option>
                  <option value="Cambodia"> Cambodia </option>
                  <option value="France"> France </option>
                  <option value="United Kingdom"> United Kingdom</option>
                  <!-- Add more options for countries -->
                </select>
                <select class="input-line" name="state" placeholder="State">
                  <option value="" disabled selected>Select State</option>
                  <option value="Phnom Penh"> Phnom Penh </option>
                  <option value="Paris"> Paris </option>
                  <option value="London"> London </option>
                  <!-- Add more options for states -->
                </select>
                <input type="name" name="zip" class="input-line" placeholder="Zip">
              </div>

              <hr>

              <div class="customer-footer">
               <a href="/cart" class="path"> &lt; Return to Cart</a>
               <button class="shipping-btn"> continue to shipping method </button>
              </div>
            </form>
           
            

        </div>

        <div class="summary">
            <h3> Summary </h3>
            <hr>
            <form>
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
              <div class="discount-details">
                <div>
                  <p> Gift card or discount code </p>
                </div>
                <div class="discount">
                  <input type="text" name="discount-code" class="discount-input"> 
                  <button class="btn"> Apply </button>
                </div>
              </div>
          </form>
            <hr>
            <div class="summary-details">
              <p class="total"> Total </p>
              <p class="total"> $20.00 </p>
            </div>
            <!-- <router-link to="/checkout">
              <button class="btn"> Checkout </button>
          </router-link> -->
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
  .content{
    margin: auto;
    padding: 15px 30px;
    height: 520px;
    display: flex;
    justify-content: space-between;
    column-gap: 20px;
    overflow-y: hidden;
  }

  .path{
    font-size: 14px;
    text-decoration: none;
    color: black;
  }

  hr{
    height: 2px;
    background-color: black;
  }
  
  h3{
    font-size: 25px;
  }
  /* customer info */
  .customer-info{
    font-weight: bold;
  }

  .cart{
    width: 60%;
  }

  .input-line {
    display: block;
    background-color: #EFE7DA;
    border: 1px solid black;
    height: auto;
    width: 100%;
    padding: 5px 10px;
    margin: auto;
    text-align: start;
  }

  .customer-name{
    display: flex;
    justify-content: space-between;
    column-gap: 10px;
    margin: 12px 0;
    
  }

  .customer-footer{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 12px;
  }

  .shipping-btn,
  .btn{
    background-color: black;
    color: white;
    height: 28px;
    width: 250px;
  }


  

  /* summary */
  .summary{
    width: 40%;
    background-color: #EFE7DA;
    margin-top: 40px;
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
    margin-top: -15px;
  }

  .summary-details:not(:last-child) {
    margin-bottom: 0;
  }

  .summary-details .total{
    font-weight: bold;
  }

  .discount{
    display: flex;
    justify-content: space-between;
    column-gap: 8px;
    margin-bottom: 0;
  }

  .discount-details{
    margin-bottom: 19px;
  }

  .discount-input{
    background-color: white;
    height: 28px;
    width: 380px;
    border: white;
  }

  /* .btn{
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
    
  } */

  .shipping-btn:hover,
  .btn:hover{
    background-color: white;
    color: black;
    border: white;
    font-weight: bold;
  }
  
  


  



</style>

