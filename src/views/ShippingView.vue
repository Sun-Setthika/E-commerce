<script>
 import { ref } from 'vue'
 import HeaderView from './HeaderView.vue';
 import axios from 'axios';

export default {
  name: 'ShippingView',
  components: {
     HeaderView
    },
  data(){
    return{
      latestAddress: [],
      ShippingMethod: [],
      selectedShippingMethod: '',
      loading: true,
    };
  },
  created(){
    this.fetchLatestAddressId(),
    this.fetchShippingMethod(),
    this.subtotal = JSON.parse(localStorage.getItem('subtotal')) || []
  },
  methods:{
    fetchLatestAddressId(){
            axios.get(`http://localhost:8000/api/carts/customerInfo/lastest-address-id`) // Replace this with your actual backend API endpoint to fetch category details
                .then(response => {
                    this.latestAddress = response.data.latestAddressId;
                    console.log(this.latestAddress);
                })
                .catch(error => {
                    console.error(error);
                });
      },
      fetchShippingMethod(){
            axios.get(`http://localhost:8000/api/carts/customerInfo/shippingMethods`) // Replace this with your actual backend API endpoint to fetch category details
                .then(response => {
                    this.ShippingMethod = response.data;
                    // console.log(this.shippingMethod);
                })
                .catch(error => {
                    console.error(error);
                });
      },
      getShippingMethod(){
        if(this.selectedShippingMethod){
          console.log('Selected Shipping Method:', this.selectedShippingMethod);
          localStorage.setItem('shippingmethod', this.selectedShippingMethod);
          this.loading = false;

        }
        
      },
  },
    
};
</script>

<template>
  
   <HeaderView/>

  <div class="path"> Cart >  Customer Information > <span class="current-path"> Shipping Information </span> > Payment
    method </div>
  <!-- content -->
  <div class="shipping-page-content">
    
      <div class="shipping">
        <div class="shipping-address-info">
          <div class="shipping-address"> <span class="current-path"> Shipping address </span> </div>
          <div class="shipping-address"> {{ latestAddress.address }}</div>
        </div>
        <!-- <form @submit.prevent="getShippingMethod"> -->
        <div>
          <div class="shipping-method">Shipping Method</div>
          <div  v-for="method in ShippingMethod" :key="method.id" class="shipping-type">
            <div>
              <input type="radio" :id="method.id" :name="'shippingMethod'" :value="method.type" v-model="selectedShippingMethod">
              <label :for="method.id">{{ method.type }}</label><br>
            </div>
          
            <div class="">
              <p :for="method.id">$ {{ method.price }}0</p>
            </div>
            
          </div>

        <hr>

        <div class="shipping-footer">
          <router-link to="/checkout" tag="div" class="return-cart">
            &lt; Return to Shipping Information
          </router-link>
          <router-link to="/paymentmethod" tag="div">
            <button class="shipping-btn" @click="getShippingMethod"> continue to payment method </button>
          </router-link>

          
        </div>
      </div>
    <!-- </form> -->
  </div>
 

    <div class="checkout-summary">
      <h3> Summary </h3>
      <hr>
      <form class="checkout-summary-form">
        <div class=" summary-details">
          <p> Subtotal </p>
          <p> $ {{subtotal.toFixed(2)}} </p>
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
        <p class="total"> $ {{subtotal.toFixed(2)}} </p>
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

.shipping-type{
  display: flex;
  justify-content: space-between;
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