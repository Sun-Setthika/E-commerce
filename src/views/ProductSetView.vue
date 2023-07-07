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
              <a href="/login"> <i class="fa fa-user"></i> </a>
            </div>
            <div class="icons">
              <a href="/cart">
                <i class="fa fa-shopping-cart"></i>
              </a> 
            </div>
          </div>
        </div>
        <div class="nav">
          <a href="/welcome">Welcome</a>
          <p class="dot">&#183;</p>
          <a href="/">Home</a>
          <p class="dot">&#183;</p>
          <a href="/lips">Lips</a>
          <p class="dot">&#183;</p>
          <a>Sets</a>
          <p class="dot">&#183;</p>
          <a>About Us</a>
        </div>
      </div>
  
      <p class="path"> Home > Sets > <span class="customer-info"> Yolaine X Gala Sets </span> </p>
    <div id="product-page">
        <div id="product-image">
            <div id="product-subimage">
                <img id="product-subimage1" src="../assets/css/images/yolainXgala.jpg">
                <img id="product-subimage2" src="../assets/css/images/subimage1.jpg">
                <img id="product-subimage3" src="../assets/css/images/lipset4.jpg">
            </div>
            <img id="product-mainimage" src="../assets/css/images/yolainXgala.jpg">
  
        </div>
  
        <div class="product-details">
            <div class="product-name-price">
                <div class="product-name-product-page">Yolaine X Gala Sets</div>
                <div class="product-price-product-page">20$</div>
            </div>
            <div class="product-size-scent-quantity">
                <div class="product-page-dropdown-container">
                    <div class="product-page-dropdown-text">Size</div>
                    <select class="product-page-dropdown">
                        <option value="s"> Mini </option>
                        <option value="m"> Grande </option>
                        
                    </select>
                </div>
                <div class="product-page-dropdown-container">
                    <div class="product-page-dropdown-text"> Color </div>
                    <select class="product-page-dropdown">
                        <option value="ginger"> Rouge </option>
                        <option value="strawberry"> Rose </option>
                        
                    </select>
                </div>
                <div>
                    <label for="quantity">Quantity
                        <input id="quantity" name="quantity" class="input-line">
                    </label>
                </div>
            </div>
  
            <div class="add-cart-btn-container">
                <button id="add-cart-btn">Add to cart</button>
            </div>
  
            <div class="product-page-product-description-container">
                <div class="product-page-product-description">Description</div>
                <div class="product-page-product-description-text">Pigmented and airy, the Mousse de Rouge delicately
                    enhances lips and cheekbones. Its matte and
                    velvety finish brings a touch of chic to your complexion.</div>
            </div>
        </div>
    </div>
  
    <div class="product-page-recommend-product">
        <img src="../assets/css/images/lipset2.jpg">
        <img src="../assets/css/images/lipset3.jpg">
        <img src="../assets/css/images/set3.jpg">
        <img src="../assets/css/images/frambroise.jpg">
        <img src="../assets/css/images/yolaine.jpg">
        <img src="../assets/css/images/moouse.jpg">
        <img src="../assets/css/images/daphne.jpg">
        <img src="../assets/css/images/rosier.jpg">
        <img src="../assets/css/images/pivoine.jpg">
        
    </div>
  
  
  
  
    <!-- <Footer></Footer> -->
  </template>
  
  <style scoped>
      .path{
      font-size: 18px;
      text-decoration: none;
      color: black;
      margin: 25px;
    }
  
      .customer-info{
        font-weight: bold;
      }
  
      #product-page {
          padding-left: 15px;
          padding-right: 15px;
          display: flex;
          gap: 15px;
      }
  
      #product-image {
          display: flex;
          gap: 35px;
      }
  
      #product-subimage {
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          width: 160px;
      }
  
      #product-mainimage {
          width: 600px;
          height: 600px;
          object-fit: cover;
      }
  
      .product-details{
        width: 35%;
        padding-left: 10px;
        padding-right: 10px;
      }
  
      .product-name-price {
          display: flex;
          justify-content: space-between;
          font-size: 23px;
          border-bottom: 1.5px solid black;
      }
  
      .product-size-scent-quantity {
          margin-top: 40px;
          margin-left: 20px;
      }
  
      .product-name-product-page,
      .product-price-product-page {
          font-weight: 700;
      }
  
      .product-page-dropdown-container {
          display: flex;
          margin-bottom: 30px;
          border-bottom: 2px solid black;
          width: 310px;
      }
  
      .product-page-dropdown-text {
          font-size: 20px;
          font-weight: 600;
          width: 120px;
      }
  
      .product-page-dropdown {
          padding: 5px 20px;
          border: 1px solid black;
          font-size: 20px;
          width: 200px;
          border: none;
      }
  
      label[for="quantity"] {
          font-size: 20px;
          margin-right: 200px;
          font-weight: bold;
      }
  
      #quantity {
          border: none;
          border-bottom: 2px solid black;
          width: 250px;
          margin-left: 16px;    
          font-size: 20px;
          padding: 5px 20px;
      }
  
      .input-line{
        width: 200px;
      }
  
      .add-cart-btn-container {
          display: flex;
          justify-content: center;
          margin-top: 40px;
      }
  
      #add-cart-btn {
          font-size: 20px;
          font-weight: 600;
          text-align: center;
          background-color: #F6F5EC;
          border: none;
          width: 350px;
          padding-top: 8px;
          padding-bottom: 8px;
      }
  
      .product-page-product-description-container {
          margin-top: 30px;
          margin-left: 20px;
      }
  
      .product-page-product-description {
          font-weight: 600;
          font-size: 22px;
          margin-bottom: 20px;
      }
  
      .product-page-product-description-text {
          font-size: 20px;
      }
  
      .product-page-recommend-product {
          margin-top: 120px;
          display: flex;
          gap: 90px;
          overflow-x: scroll;
          border-top: 1px solid black;
          padding: 50px 54px 30px 54px;
      }
  
      .product-page-recommend-product img {
          width: 150px;
          height: 150px;
          object-fit: cover;
          
      }
  
  
  
  
  
  
  
  
  
  
  /* .carousel img {
      width: 400px;
      height: 400px;
  }
  
  .wrapper {
      position: relative;
      display: flex;
  }
  
  #left-arrow {
      position: absolute;
      top: 45%;
      left: -10px;
  } 
  
  #right-arrow {
      position: absolute;
      top: 45%;
      right: -10px;
  }
  
  #product-subimage1,
  #product-subimage2,
  #product-subimage3 {
      display: hidden;
  } */
  
  </style>
  
  <script>
  import Header from './HeaderView.vue'
  
  
  
  let productImage = document.getElementById('product-image')
  let productSubImage1 = document.getElementById('product-subimage1');
  let productSubImage2 = document.getElementById('product-subimage2');
  let productSubImage3 = document.getElementById('product-subimage3');
  
  export default {
    name: 'ProductSetView',
    components: {
        Header
    },
    methods: {
  
    }
  }
  
  </script>
  
  