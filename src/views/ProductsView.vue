<template>
  <HeaderView :cartCount="cartCount"/>
   <form @submit.prevent="addToCart">
        <p class="path"> Home > Lips > <span class="customer-info"> {{ product.name }} </span> </p>
        <div id="product-page">
            <div id="product-image">
                <div id="product-subimage">
                    <img id="product-subimage1" :src="getImage(product.image2)">
                    <img id="product-subimage2" :src="getImage(product.image3)">
                    <img id="product-subimage3" :src="getImage(product.image4)">
                </div>
                <img id="product-mainimage" :src="getImage(product.image)">

            </div>

            <div class="product-details">
                <div class="product-name-price">
                    <div class="product-name-product-page"> {{ product.name }}</div>
                    <div class="product-price-product-page">$25.00</div>
                </div>
                <div class="product-size-scent-quantity">
                    <div class="product-page-dropdown-container">
                        <div class="product-page-dropdown-text">Size</div>
                        <select class="product-page-dropdown" v-model="selectedSize">
                            <option v-for="size in productSize" :key="size.id" :value="size.id">{{ size.name }}</option>
                        </select>
                        <!-- <select class="product-page-dropdown">
                            <option value="mini"> Mini </option>
                            <option value="grande"> Grande </option>
                            
                        </select> -->
                    </div>
                    <div class="product-page-dropdown-container">
                        <div class="product-page-dropdown-text" > Color </div>
                        <select class="product-page-dropdown" v-model="selectedColor">
                            <option value="1"> Rouge </option>
                            <option value="2"> Rose </option>
                            
                        </select>
                    </div>
                    <div>
                        <label for="quantity">Quantity
                            <input id="quantity" name="quantity" class="input-line" v-model="quantity">
                        </label>
                    </div>
                </div>
            
                
                <div class="add-cart-btn-container">
                    <button id="add-cart-btn" type="submit">Add to cart</button>
                </div>

                <div class="product-page-product-description-container">
                    <div class="product-page-product-description">Description</div>
                    <div class="product-page-product-description-text">Pigmented and airy, the Mousse de Rouge delicately
                        enhances lips and cheekbones. Its matte and
                        velvety finish brings a touch of chic to your complexion.</div>
                </div>
            </div>
        </div>
    </form> 

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

</style>

<script>
import axios from 'axios'
import HeaderView from './HeaderView.vue'



let productImage = document.getElementById('product-image')
let productSubImage1 = document.getElementById('product-subimage1');
let productSubImage2 = document.getElementById('product-subimage2');
let productSubImage3 = document.getElementById('product-subimage3');

export default {
  name: 'ProductView',
  components: {
      HeaderView
  },
  data() {
    return {
      product: [], // Holds the details of the fetched product
      productSize: [], 
      selectedSize: '',
      selectedColor: '',
      quantity: 1,
      cartCount: 0,
      loggedIn: false,
    };
  },
  created() {
    this.fetchProduct();
    this.fetchProductSize();
    this.updateCartCount();

    const isLoggedIn = localStorage.getItem('isLoggedIn');
    this.loggedIn = isLoggedIn === 'true'; // Convert the string to a boolean value this.isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
  },
  methods: {
    fetchProduct() {
       this.productId = this.$route.params.productId;
      axios
        .get(`http://localhost:8000/api/products/${this.productId}`)
        .then(response => {
          this.product = response.data; // Save the fetched product details in the 'product' data property
        })
        .catch(error => {
          console.error(error);
        });
    },
    fetchProductSize() {
        console.log('Fetching product sizes...');
        const productId = this.$route.params.productId;
        axios
        .get(`http://localhost:8000/api/size/products`)
        .then(response => {
            console.log(response)
            this.productSize = response.data; // Update the assignment to response.data directly
            // console.log('Product sizes:', this.productSize);
        })
        .catch(error => {
            console.error(error);
        });
  },
    getImage(imagePath) {
            return `http://localhost:8000/storage/${imagePath}`
        },
    addToCart() {
    const productId = this.$route.params.productId;
    if(this.isLoggedIn){
        const cart = {
        user_id: '1',
        product_id: productId, // Use "product_id" instead of "productId"
        color_id: this.selectedColor, // Use "color_id" instead of "colorId"
        status: 'billed',
        product_size_id: this.selectedSize,
        quantity: this.quantity,
    };

    // console.log(cart);
    axios
        .post('http://localhost:8000/api/carts', cart)
        .then(() => {
        alert('Product added to cart!');
        this.$router.push('/cart');
        })
        .catch(error => {
        console.error('Error saving cart data to the database:', error);
        // Handle the error or show an error message to the user
        });

        //save into local storage
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        cartItems.push(cart);
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
    }else{
        alert('Please log in to add items to the cart.');
        // Optionally, redirect to the login page
        this.$router.push('/login');
    }
    // const cart = {
    //     user_id: '1',
    //     product_id: productId, // Use "product_id" instead of "productId"
    //     color_id: this.selectedColor, // Use "color_id" instead of "colorId"
    //     status: 'billed',
    //     product_size_id: this.selectedSize,
    //     quantity: this.quantity,
    // };

    // // console.log(cart);
    // axios
    //     .post('http://localhost:8000/api/carts', cart)
    //     .then(() => {
    //     alert('Product added to cart!');
    //     this.$router.push('/cart');
    //     })
    //     .catch(error => {
    //     console.error('Error saving cart data to the database:', error);
    //     // Handle the error or show an error message to the user
    //     });

    //     //save into local storage
    //     let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    //     cartItems.push(cart);
    //     localStorage.setItem('cartItems', JSON.stringify(cartItems));
    },
    updateCartCount() {
      const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
      this.cartCount = cartItems.length; // Set the cartCount based on the number of items in the cart
    },
    
        
  }
  
};


</script>

