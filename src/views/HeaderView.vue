<template>
    <div class="wrapper">
      <div class="header">
        <div class="header-icons">
          <div class="icons">  <i class="fa fa-bars" style="font-size:18px;"></i> </div>
          <div class="icons">  <i class="fa fa-search" style="font-size:18px;"></i> </div>
        </div>

        <!-- <a href="/"> -->
          <h1>Paris Cosmetic</h1>
        <!-- </a> -->
        
        <div class="header-icons">
          <div class="icons"> 
            <a href="/login"> <i class="fa fa-user" style="font-size:19px;"></i> </a>
            </div>
          <div class="icons">
              
              <i class="fa fa-shopping-cart" style="font-size:19px;" @click="() => togglePopup('buttonTrigger')"></i>
              <Popup v-if="popupTrigger.buttonTrigger" :togglePopup="() => togglePopup('buttonTrigger')"></Popup>

              <div class="cart-count">
                
                {{ cartCount }}
              </div>
          </div>
        </div>
      </div>
      <div class="nav">
        <a href="/welcome">Welcome</a>
         <p class="dots">&#183;</p> 
        
        <a href="/">Home</a>
        
         <li class="nav-list" v-for="product_cat in product_cats" :key="product_cat.id">
          
          <a class="bold" @click="navigateToCategory(product_cat)">
            {{ product_cat.name }}
          </a>
        </li>
        
        <p class="dots">&#183;</p>
        <a>About Us</a>
        
      </div>
    </div>
  </template>

  <style>
      .dots {
        font-size: 30px;
        font-weight: 800;
        margin: 0;
        padding: 0;
        display: inline-block;
        margin-left: 5px;
}

      .nav-list{
        font-size: 16px;
        margin-left: 5px
      }
  </style>
  
<script>
import { ref, watch, onMounted } from 'vue';
import axios from 'axios';
import Popup from './CartPopUp.vue';

export default {
  name: 'Header',
  props: {
    cartCount: {
      type: Number,
      required: true,
    },
  },
  components: {
    Popup,
  },
  setup() {
    const popupTrigger = ref({
      buttonTrigger: false,
    });

    const togglePopup = (trigger) => {
      popupTrigger.value[trigger] = !popupTrigger.value[trigger];
    };

    const cartCount = ref(0);

    const updateCartCount = () => {
      const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
      cartCount.value = cartItems.length; // Set the cartCount based on the number of items in the cart
    };

    // Watch for changes in cartItems in localStorage and update cartCount accordingly
    window.addEventListener('storage', updateCartCount);

    // Call the updateCartCount function once when the component is mounted
    onMounted(updateCartCount);

    return {
      popupTrigger,
      togglePopup,
      cartCount, // Expose the cartCount to the template
    };
  },
  data() {
    return {
      product_cats: [],
    };
  },
  created() {
    // Call the API when the component is created
    this.fetchProducts();
  },
  methods: {
    fetchProducts() {
      axios
        .get('http://localhost:8000/api/productcategories')
        .then((response) => {
          this.product_cats = response.data;
        })
        .catch((error) => {
          console.error(error);
        });
    },
    navigateToCategory(category) {
      this.$router.push(`/productcategory/${category.id}`);
    },
  },
};

</script>