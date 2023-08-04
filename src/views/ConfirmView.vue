<script>
import axios from 'axios';
import HeaderView from './HeaderView.vue';

export default {
    name: 'ConfirmView',
    components:{
        HeaderView,
  },
  data(){
    return{
      latestAddress: [],
      latestOrder: [],
    };
  },
  created(){
    this.fetchLatestAddressId();
    this.fetchLatestOrderId();
    
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
    fetchLatestOrderId(){
            axios.get(`http://localhost:8000/api/orders/latest-order-id`) // Replace this with your actual backend API endpoint to fetch category details
                .then(response => {
                    this.latestOrder = response.data.latestOrderId;
                    console.log(response);
                })
                .catch(error => {
                    console.error(error);
                });
      },
    }

};
</script>

<template>
   <HeaderView/>

    <!-- content -->
    <div class="content">
        <div class="order-confirmed">
            <h4> Order {{ latestOrder.id }} Confirmed </h4>
            <hr>
            <p> hello@pariscosmetic.com to me</p>
        </div>
        <div class="desc">
            <h3>
                Paris Cosmetic
            </h3>
            <div class="order-desc">
                <p> Hi, we're getting your order ready to be shipping. We will nofity you when it has been sent</p>
                <!-- <router-link to="/cart">
                    <button class="btn"> View your order </button>
                </router-link> -->
            </div>
        </div>
        <hr>
        
        <div class="summary">
            <h3> Summary </h3>
            <hr>
            <div class=" summary-details">
              <p> Subtotal </p>
              <p> $ {{ latestOrder.subtotal }} </p>
            </div>
            <!-- <div  class=" summary-details">
              <p> Total </p>
              <p> $ {{ latestOrder.total }} </p>
            </div> -->
            <div  class=" summary-details">
              <p> Taxes </p>
              <p> $0.0 </p>
            </div>
            <hr>
            <div class="summary-details">
              <p> Total </p>
              <p class="total">  $ {{ latestOrder.total }} </p>
            </div>
           
        </div>

        <div class="address">
            <div>
                <h3> Shipping Address </h3>
                <div>
                    {{ latestAddress.address }}
                </div>
            </div>
            <div>
                <h3> Billing Address </h3>
                <div>
                    {{ latestAddress.address }}
                </div>
            </div>
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
   
    


    
</template>

<style scoped>
    .content{
        margin: auto;
        padding: 15px 30px;
        height: 700px;
        overflow-y: hidden;
    }

    h4{
        margin-bottom: 0;
        font-weight: 700px;
        font-size: 25px;
    }

    .order-confirmed p,
    .order-desc
    {
        margin-top: 0;
        font-size: 16px;
        font-weight: 700px;
    }
    
    .desc{
        margin-bottom: 18px;
    }

    h3{
        font-size: 25px;
        font-weight: bold;
        margin-bottom: 20px;

    }

    .btn{
        background-color: black;
        color: white;
        padding: 5px 20px;
    }

    .order-details{
        display: flex;
        justify-content: space-between;
    }

    .summary{
        background-color: #EFE7DA;
        padding: 20px 50px;
    }

    .summary-details{
    display: flex;
    justify-content: space-between;
    margin-top: -15px;
  }

    .summary-details:not(:last-child) {
    margin-bottom: 0;
  }

    .summary-details p{
        font-size: 18px;
        font-weight: 600px;
    }

    .summary-details .total{
    font-weight: bold;
  }
    .address{
        display: flex;
        flex: 1;
        justify-content: space-between;
    }
    

</style>