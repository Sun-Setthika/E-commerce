<script>
  import axios from 'axios';
  import HeaderView from './HeaderView.vue';

  export default {
    name: 'Cart',
    components: {
      HeaderView
    },
    data(){
      return{
        cartItems: [],
        cart: [],
        result: 0,
      };
    },
    created() {
      this.cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
      this.fetchCart();
      
      // this.calculateSubtotal();
     },
    methods: {
      fetchCart(){
        axios.get(`http://localhost:8000/api/carts/all`) 
                .then(response => {
                  this.cart = response.data.cartId;
                    console.log(this.cart);

                    //save calculatesubtotal to local storage
                    this.result = this.cart.reduce((total, item) => total + (item.price * item.quantity), 0);
                    localStorage.setItem('subtotal', this.result.toFixed(2));
                })
                .catch(error => {
                    console.error(error);
                });
      },
      getImage(imagePath) {
            return `http://localhost:8000/storage/${imagePath}`
      },
      addToOrderDeatil(){
        const orderDetailData = {
         
          product_id: this.cartItems.map(item => item.product.id),
          color_id: this.cartItems.map(item => item.color.id),
          product_size_id: this.cartItems.map(item => item.productSize.id),
          quantity: this.cartItems.map(item => item.quantity),
          total: this.calculateSubtotal.toFixed(2),
    };
        axios
          .post('http://localhost:8000/api/orderdetails', orderDetailData)
          .then(() => {
          alert('Product added to order details!');
          this.$router.push('/checkout');
          })
          .catch(error => {
          console.error('Error saving cart data to the database:', error);
          // Handle the error or show an error message to the user
          });
      },
      
      //save subtotal to local storage
       
      
      
    },
    computed: {
      calculateSubtotal() {
        //reduce is a function to a single value, 0 initliaise the starting value at 0
        return this.result 
      }
},
};

</script>

<template>
    <div class="body1">
      <HeaderView/>

    <!-- content -->
    <form  @submit.prevent="addToOrderDeatil">
    <div class="content">
        <div class="cart">
            <h3> Your Cart </h3>
            <hr>
            <div class="cart-header">
                <p> Item </p>
                <p> Price </p>
                <p> Quantity </p>
            </div>
            <div class="cart-items" v-if="cart && cart.length ">
              <div class="cart-details"  v-for="item in cart" :key="item.id">
                <div class="product-img">
                <img :src="getImage(item.product.image)" class="cart-product">
                <div class="product-desc">
                    <div class="cart-text"> {{ item.product.name }}</div>
                    <div class="cart-text"> Color: {{ item.color.name }} </div>
                </div>
                
                </div>
                <div class="price"> $ {{item.price}} . 00</div>
                <div class="quantity">{{ item.quantity }} </div>
            </div>


            
            </div>
            <div v-else>
                <!-- Display a message when the latestCart object is null -->
                <p>No items in the cart.</p>
          </div>
            

            <hr>
            <div class=subtotal>
                <div class="cart-text"> Subtotal:  </div>
                <div class="cart-text">  ${{ calculateSubtotal.toFixed(2) }} </div>
            </div>
            <hr>
        </div>
        <div class="summary">
            <h3> Summary </h3>
            <hr>
            <div class=" summary-details">
              <p> Subtotal </p>
              <p>${{ calculateSubtotal.toFixed(2) }} </p>
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
              <p class="total"> ${{ calculateSubtotal.toFixed(2) }} </p>
            </div>
            <router-link to="/checkout">
              <button class="btn"> Checkout </button>
          </router-link>
        </div>
        



    </div>
  </form>
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

  /* .body1{
    width: 100%;
    background-color: #F6F5EC;
    margin: 0;
    padding: 0;
    overflow-x: scroll;
    height: 100vh;
    display: flex;
    flex-direction: column;
  } */

  hr{
    height: 2px;
    background-color: black;
  }

  .content{
    
    padding: 0 30px;
    height: 550px;
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
    margin-top: 50px;
    padding: 20px;
    position: sticky; 
    bottom: 0;
    height: 385px;
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

  .summary-details .total{
     font-weight: bold;
    font-size: 20px;
  }

  .btn{
    /* width: 320px; */
    border-radius: 30px;
    padding: 8px;
    color: white;
    background-color: black;
    padding: 10px;
    margin: 10px 18%;
    font-weight: bold;
    /* height: 40px; */
    font-size: medium;
    padding: 10px 110px;
    
  }

  .btn:hover{
    background-color: white;
    color: black;
    border: white;
    font-weight: bold;
  }
  
  


  
  
  


</style>

