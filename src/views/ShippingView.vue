<script>
 import { ref } from 'vue'
import Popup from '../views/CartPopUp.vue'

export default {
  name: 'ShippingView',
  components: {
      Popup,
    },
    setup() {
      const popupTrigger = ref({
        buttonTrigger: false,
      })
  
      const togglePopup = (trigger) => {
        popupTrigger.value[trigger] = !popupTrigger.value[trigger]
      }
  
      return {
        popupTrigger,
        togglePopup,
      }
    },
};
</script>

<template>
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
            <i class="fa fa-shopping-cart" @click="() => togglePopup('buttonTrigger')"></i>
  
            <Popup v-if="popupTrigger.buttonTrigger" :togglePopup="() => togglePopup('buttonTrigger')"></Popup>
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

  <div class="path"> Cart > <span class="current-path"> Customer Information </span> > Shipping Information > Payment
    method </div>
  <!-- content -->
  <div class="shipping-page-content">
    <div class="shipping">
      <div class="shipping-address-info">
        <div class="shipping-address"> <span class="current-path"> Shipping address </span> </div>
        <div class="shipping-address">12 Waldo Point Road, Minshauken NY 11200</div>
      </div>

      <form>
        <div class="shipping-method">Shipping Method</div>
        <input type="radio" id="ups-ground" name="shipping" value="ups-ground">
        <label for="ups-ground">UPS Ground</label><br>
        <input type="radio" id="ups-3day-select" name="shipping" value="ups-3day-select">
        <label for="ups-3day-select">UPS 3 Day Select</label><br>
        <input type="radio" id="ups-2nd-day" name="shipping" value="ups-2nd-day">
        <label for="ups-2nd-day">UPS 2nd Day Air</label><br>
        <input type="radio" id="ups-next-day" name="shipping" value="ups-next-day">
        <label for="ups-next-day">UPS Next Day Air</label><br>
      </form>

      <hr>

      <div class="shipping-footer">
        <router-link to="/checkout" tag="div" class="return-cart">
          &lt; Return to Shipping Information
        </router-link>
        <router-link to="/payment" tag="div">
          <button class="shipping-btn"> continue to payment method </button>
        </router-link>
      </div>
    </div>

    <div class="checkout-summary">
      <h3> Summary </h3>
      <hr>
      <form class="checkout-summary-form">
        <div class=" summary-details">
          <p> Subtotal </p>
          <p> $20.00 </p>
        </div>
        <div class=" summary-details">
          <p> Shipping </p>
          <p> - </p>
        </div>
        <div class=" summary-details">
          <p>Taxes </p>
          <p> - </p>
        </div>
        <hr>
        <div class="discount-details">
          <div>
            <p> Gift card or discount code </p>
          </div>
          <div class="discount">
            <input type="text" name="discount-code" class="input-line">
            <button class="code-apply-btn"> Apply </button>
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

  
</template>


<style scoped>
/* @import '../assets/css/shipping.css'; */
.shipping-page-content {
    margin: auto;
    padding: 0 27px 15px 27px;
    height: 520px;
    display: flex;
    gap: 50px;
    justify-content: space-between;
    overflow-y: hidden;
}

.path {
    font-size: 14px;
    margin-left: 27px;
    margin-top: 34px;
    border-bottom: 2px solid black;
    display: inline-block;
    width: 700px;
    padding-bottom: 20px;
}

.current-path {
    font-weight: 700;
}

hr {
    margin-top: 20px;
    height: 2px;
    background-color: black;
}

.shipping h3 {
    font-size: 25px;
    margin-top: 0;
    font-weight: 700;
}

/* customer info */
.shipping-address-info {
    padding-bottom: 20px;
    border-bottom: 2px solid black;
}

.shipping-address {
    font-size: 16px;
    display: inline-block;
    margin-right: 10px;
    font-weight: 700px;
}

.shipping {
    width: 70%;
    margin-top: 20px;
}

.shipping-method {
    font-size: 25px;
    font-weight: 700;
    margin-top: 20px;
    margin-bottom: 20px;
}

.input-line{
  width: 350px;
  border: 1px solid white;
}

input[type="radio"] {
    margin-right: 15px;
    transform: scale(1.1); 
    margin-bottom: 16px;
}

label[for="ups-ground"],
label[for="ups-3day-select"],
label[for="ups-2nd-day"],
label[for="ups-next-day"] {
    font-size: 15px;
    font-weight: 500;
    margin-bottom: 16px;
}







.shipping-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 22px;
}

.return-cart {
    font-size: 15px;
    color: black;
    text-decoration: none;
}

.shipping-btn,
.code-apply-btn {
    background-color: black;
    color: white;
    padding: 5px 20px;
    font-size: 16px;
}

.checkout-summary {
    width: 45%;
    background-color: #EFE7DA;
    padding: 30px 20px;
    height: fit-content;
}

.checkout-summary-form {
    margin-top: 20px;
}

.checkout-summary p {
    font-weight: 500;
    font-size: 16px;
}

.checkout-summary hr {
    height: 2.2px;
    font-weight: bold;
    margin-top: 10px;
}

.checkout-summary h3 {
    font-size: 32px;
    font-weight: 700;
    margin: 0;
}

.summary-details {
    display: flex;
    justify-content: space-between;
    margin-top: -15px;
    margin-bottom: 0;
}

.summary-details:not(:last-child) {
    margin-bottom: 0;
}

.summary-details .total {
    font-weight: bold;
}

.discount {
    display: flex;
    justify-content: space-between;
    column-gap: 8px;
    margin-bottom: 0;
}

.discount-details {
    margin-bottom: 19px;
}

.shipping-btn:hover,
.btn:hover {
    background-color: white;
    color: black;
    border: white;
    font-weight: bold;
}
</style>