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
            <p class="path"> Cart >  Customer Information > Shipping Information >  <span class="customer-info"> Payment method  </span> </p>
            <hr>

            <div class="shipping-address">
                <p> <span class="customer-info"> Shipping address </span> 12 Waldo Point Road, Mishauken NY 1200 </p>
                <p> Edit </p>
            </div>
            <hr>
            <div class="shipping-address"> 
                <p> <span class="customer-info"> Shipping Method </span> UPS Ground, $2.20 </p>
                <p> Edit </p>
            </div>
            <hr>
            <div> 
                <div>
                    <div class="payment">
                        <h3> Payment method</h3>
                        <div class="payment-method"> 
                            <i class="fa fa-cc-mastercard"></i>
                            <i class="fa fa-cc-visa"></i>
                            <i class="fa fa-paypal"></i>
                        </div>
                    </div>
                    <div>
                        <input type="text" name="cardNumber" class="input-line" placeholder="Card number">
                    </div>
                    <div class="payment-details">
                        <input type="text" name="nameOfCard" class="input-line" placeholder="Name of card">
                        <input type="date" name="date" class="input-line" placeholder="YYYY-MM-DD">
                        <input type="text" name="cvv" class="input-line" placeholder="CVV">
                    </div>
                    
                </div>
                <hr>
                <div>
                    <h3> Billing Address </h3>
                </div>
                <div class="bill-input">
                  <input type="radio" name="address" value="shipping-address" id="shipping-address" class="input-radio">
                  <label for="shipping-address"> Same as shipping address </label>
                </div>
                <div class="bill-input">
                  <input type="radio" name="address" value="billing-address" id="billing-address" class="input-radio">
                  <label for="billing-address"> Use a different billing address </label>
                </div>
            </div>
            <div>
              <div>
                    <h3> Remember Me </h3>
                </div>
                <div class="bill-input">
                  <input type="checkbox" name="information" value="information" id="information" class="checkbox-radio">
                  <label for="shipping-address"> Same as shipping address </label>
                </div>
            </div>
            <hr>
            <div class="customer-footer">
               <a href="/cart" class="path"> &lt; Return to Cart</a>
               <button class="shipping-btn"> continue to shipping method </button>
              </div> 

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
                <p> $2.20 </p>
              </div>
              <div  class=" summary-details">
                <p>Taxes </p>
                <p> @1.40 </p>
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
    height: 600px;
    display: flex;
    justify-content: space-between;
    column-gap: 20px;
    overflow-y: hidden;
  }

  /* cart header */

  .path{
    font-size: 14px;
    text-decoration: none;
    color: black;
  }

  hr{
    height: 2px;
    background-color: black;
    margin-top: 12px;
    margin-bottom: 12px;
  }
  
  h3{
    font-size: 25px;
  }
  /* customer info */
  .customer-info{
    font-weight: bold;
  }

  /* shipping info */

  .cart{
    width: 60%;
  }

  .cart h3{
    margin-top: 18px;
    margin-bottom: 18px;
  }

  .shipping-address,
  .payment{
    display: flex;
    justify-content: space-between;
    height: 30px;
    align-items: center;
  }

  .shipping-address p{
    font-size: 16px;
  }

  /* Payment method */
  .payment{
    margin: 15px auto;
  }
  .payment-method{
    display: flex;
    column-gap: 16px;
  }

  .payment-details{
    display: flex;
    justify-content: space-between;
    margin-top: 12px;
    column-gap: 5px;
  }

  .input-line {
    display: block;
    background-color: #EFE7DA;
    border: 1px solid black;
    height: 25px;
    width: 100%;
    padding: 5px 10px;
    margin: auto;
    text-align: start;
  }

  .shipping-btn,
  .btn{
    background-color: black;
    color: white;
   
    padding: 5px 20px;
  }

  /* biling address */
  .bill-input{
    display: flex;
    align-items: center;
    column-gap: 8px;
    font-size: 13px;
    height: 25px;
    background-color: #EFE7DA;
    padding: 5px 10px;
    border: 1px solid black;
  }

  .input-radio{
    margin: 0;
  }

  .checkbox-radio{
    border-radius: 0;
    border: 2px solid black ;
  }
  
  /* customer footer */
  .customer-footer{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 12px;
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

 

  .shipping-btn:hover,
  .btn:hover{
    background-color: white;
    color: black;
    border: white;
    font-weight: bold;
  }
  
  


  



</style>

