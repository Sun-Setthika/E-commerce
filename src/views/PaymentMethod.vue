<script>
  import axios from 'axios';
  import HeaderView from './HeaderView.vue';

export default {
  name: 'PaymentMethod',
  components:{
    HeaderView,
  },
  data() {
    return {
      latestAddress: [],
      selectedDiscount: '',
      result: 0,
      discountCode: [],
      
    };
  },
  created(){
    this.fetchLatestAddressId(),
    this.fetchDiscountCode(),
    this.shippingmethod = JSON.parse(localStorage.getItem('shippingmethod')) || []
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
    fetchDiscountCode(){
      axios.get(`http://localhost:8000/api/carts/customerInfo/shippingMethods/discount-code`)
        .then(response => {
                this.discountCode = response.data;
                      console.log(this.discountCode);
                  })
                  .catch(error => {
                      console.error(error);
                  });
    }
  },
  computed: {
    calculateTotal(){
      const subtotal = this.subtotal;
      const price = this.shippingmethod.price;
      return (subtotal + price);
    },
    calculateTotalwithDiscount(){
      
    }
  },
};

</script>

<template>
  <div>
   <HeaderView/>

    <!-- content -->
    <div class="content">
        <div class="cart">
            <p class="path"> Cart >  Customer Information > Shipping Information >  <span class="customer-info"> Payment method  </span> </p>
            <hr>

            <div class="shipping-address">
                <p> <span class="customer-info"> Shipping address </span>{{ latestAddress.address }} </p>
                <p> Edit </p>
            </div>
            <hr>
            <div class="shipping-address"> 
              <p> <span class="customer-info"> Shipping Method </span> {{shippingmethod.type }},  ${{ shippingmethod.price }} </p>
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
                <p> ${{subtotal}} </p>
              </div>
              <div  class=" summary-details">
                <p> Shipping </p>
                <p> ${{shippingmethod.price}}0 </p>
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
                  <input type="text" name="discount-code" class="discount-input" v-model="selectedDiscount"> 
                  <button class="btn"> Apply </button>
                </div>
              </div>
          </form>
            <hr>
            <div class="summary-details">
              <p class="total"> Total </p>
              <p class="total"> $ {{ calculateTotal.toFixed(2) }} </p>
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

