<template>
    <div class="cart-popup">
      <div class="small-triangle"></div>
      <div class="cart-popup-container">
        <div class="cart-title">
          <div class="cart-text">Items added to cart</div>
          <i id="close-cart-btn" @click="togglePopup()" class="fa-solid fa-xmark"></i>
        </div>
        <div>
          <!-- <div class="cart-popup-product-name">MOUSSE DE ROUGE</div> -->
          <ul class="cart-popup-product-list">
            <li class="cart-popup-product-name">MOUSSE DE ROUGE</li>
            <li class="cart-popup-product-detail-container">
              <div class="cart-popup-product-detail">QT: 1</div>
              <div class="cart-popup-product-detail">| $20</div>
            </li>
          </ul>
        </div>
        <div class="cart-popup-btn-container">
          <button id="cart-popup-view-cart-btn">View cart</button>
          <button id="cart-popup-check-out-btn">Check out</button>
        </div>
      </div>
    </div>
  </template>

  <style>
    .cart-popup {
    position: absolute;
    top: 110px;
    right: 20px;
    z-index: 4;
    }

    .small-triangle {
        width: 0;
        margin-left: 320px;
    
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
        font-size: 28px;
        border-bottom: 2px solid black;
        width: 360px;
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
        padding-left: 20px;
    }

    .cart-popup-product-name {
        font-size: 24px;
        font-weight: 500;
    }

    .cart-popup-product-detail-container {
        display: flex;
        gap: 80px;
        font-size: 24px;
    }

    .cart-popup-product-detail {
        font-weight: 500;
    }

    .cart-popup-btn-container {
        padding-left: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    #cart-popup-view-cart-btn,
    #cart-popup-check-out-btn {
        background-color: #E8DFCA;
        margin-right: 50px;
        font-size: 20px;
        padding: 5px 20px;
        font-weight: 600;
    }

    #cart-popup-check-out-btn {
        margin-right: 0;
    }
  </style>
    
  <script>
  export default {
    props: ['togglePopup']
  };
  </script>