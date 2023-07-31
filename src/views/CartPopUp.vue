<template>
    <div class="cart-popup">
      <div class="small-triangle"></div>
      <div class="cart-popup-container">
        <div class="cart-title">
          <div class="cart-text">Items added to cart</div>
          <i id="close-cart-btn" @click="togglePopup()" class="fa-solid fa-xmark"></i>
        </div>
        <div v-if="latestCart  && latestCart.product " >
          <!-- <div class="cart-popup-product-name">MOUSSE DE ROUGE</div> -->
          <ul class="cart-popup-product-list">
            <li class="cart-popup-product-name"> {{ latestCart.product.name }} </li>
            <li class="cart-popup-product-detail-container">
              <div class="cart-popup-product-detail">QT: {{ latestCart.quantity }}</div>
              <div class="cart-popup-product-detail">| $ {{ latestCart.price }}</div>
            </li>
          </ul>
        </div>
        <div v-else>
          <!-- Display a message when the latestCart object is null -->
          <p>No items in the cart.</p>
      </div>
        
        <div class="cart-popup-btn-container">
          <router-link to="/cart">
            <button class="cart-popup-view-cart-btn">View more</button>
          </router-link>
          <router-link to="/checkout">
            <button class="cart-popup-check-out-btn" >Check out</button>
          </router-link>
          
          
        </div>
      </div>
    </div>
  </template>

  <style>
    .cart-popup {
    position: absolute;
    top: 30px;
    right: -20px;
    z-index: 4;
    }

    .small-triangle {
        width: 0;
        margin-left: 335px;
        margin-top: 0;
        border-bottom: 30px solid #D9D9D9;
        border-right: 30px solid transparent;
        border-left: 30px solid transparent;
    }

    .cart-popup-container {
        background-color: #D9D9D9;
        padding: 10px 20px;
    }

    .cart-title {
        display: flex;
        justify-content: space-between;
        font-size: 25px;
        border-bottom: 2px solid black;
        width: 330px;
        padding-bottom: 8px;
        margin-bottom: 20px;
    }

    .cart-text {
       
        font-weight: 700;
    }

    #close-cart-btn {
        margin-right: 0px;
    }

    .cart-popup-product-list {
        list-style-type: none;
        padding: 0;
        padding-left: 15px;
    }

    .cart-popup-product-name {
        font-size: 22px;
        font-weight: 500;
    }

    .cart-popup-product-detail-container {
        display: flex;
        gap: 80px;
        font-size: 18px;
    }

    .cart-popup-product-detail {
        font-weight: 500;
        font-size: 20px;
    }

    .cart-popup-btn-container {
        padding-left: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .cart-popup-view-cart-btn,
    .cart-popup-check-out-btn {
        background-color: #E8DFCA;
        margin-right: 50px;
        font-size: 18px;
        padding: 5px 20px;
        font-weight: 600;
    }

    .cart-popup-check-out-btn {
        margin-right: 0;
    }
  </style>
    
  <script>
  import axios from 'axios';

  export default {
    props: ['togglePopup'],
    data() {
      return {
        latestCart: [],
      };
    },
    created(){
      this.fetchLatestCartId();
    },
    methods: {
      fetchLatestCartId(){
            axios.get(`http://localhost:8000/api/carts/latest-cart-id`) // Replace this with your actual backend API endpoint to fetch category details
                .then(response => {
                    this.latestCart = response.data.latestCartId;
                    console.log(this.latestCart);
                })
                .catch(error => {
                    console.error(error);
                });
      }
    }

  };
  </script>