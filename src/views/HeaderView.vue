<template>
    <div class="wrapper">
      <div class="header">
        <div class="header-icons">
          <div class="icons">  <i class="fa fa-bars"></i> </div>
          <div class="icons">  <i class="fa fa-search"></i> </div>
        </div>

        <!-- <a href="/"> -->
          <h1>Paris Cosmetic</h1>
        <!-- </a> -->
        
        <div class="header-icons">
          <div class="icons"> 
            <a href="/login"> <i class="fa fa-user"></i> </a>
            </div>
          <div class="icons">
              
              <i class="fa fa-shopping-cart" @click="() => togglePopup('buttonTrigger')"></i>
  
            <Popup v-if="popupTrigger.buttonTrigger" :togglePopup="() => togglePopup('buttonTrigger')"></Popup>
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
   import axios from 'axios'
   import { ref } from 'vue'
   import Popup from './CartPopUp.vue'
  //ref is a special attribute that is used to give a name to a child component or element so that it can be referenced in the parent component. It is used to access the properties and methods of the child component or element from the parent component.
  
  export default {
    name: 'Header',
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
    data() {
    return {
      product_cats: [],
    }
  },
  created() {
    // Call the API when the component is created
    this.fetchProducts();
  },
  methods: {
    fetchProducts() {
      axios.get('http://localhost:8000/api/productcategories') // Replace this with your actual Laravel API endpoint
        .then(response => {
          this.product_cats = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
    navigateToCategory(category) {
      this.$router.push(`/productcategory/${category.id}`);
    },
  }
  }
  </script>