<script>
  import axios from 'axios';
  import HeaderView from './HeaderView.vue'

export default {
  name: 'LipCategory',
  components: {
    HeaderView
  },
  data() {
        return {
            products: [],
            image: null,
            pro: null,
        };
    },
    watch: {
        '$route.params.categoryId'(newValue) {
            this.fetchCategory(newValue);
        },
    },
    created() {
        this.fetchCategory();
    },
    methods: {
        // route to product page
        toProductPage(productId) {
            this.$router.push(`/product/${productId}`)
        },
        fetchCategory() {
            const categoryId = this.$route.params.categoryId;
            console.log(categoryId);
            axios.get(`http://localhost:8000/api/products/categories/${categoryId}`) // Replace this with your actual backend API endpoint to fetch category details
                .then(response => {
                    this.products = response.data;
                })
                .catch(error => {
                    console.error(error);
                });
        },
        fetchProduct() {
            const productId = this.$route.params.productId;
            console.log(productId);
            axios.get(`http://localhost:8000/api/products/${productId}`) // Replace this with your actual backend API endpoint to fetch category details
                .then(response => {
                    this.product = response.data;
                })
                .catch(error => {
                    console.error(error);
                });
        },

        getImage(imagePath) {
            return `http://localhost:8000/storage/${imagePath}`
        }
    }
};

</script>


<template>
    <div class="body">
      <HeaderView/>

    <div class="content">
    
        <div>
        <!-- <div class="path">Home > <span class="current-path">Shampoo</span></div> -->
        <div class="shampoo-products">
          
            <div class="shampoo" v-for="product in products" :key="product.id"  @click="toProductPage(product.id)">
                <!-- <img class="shampoo-image" src="../assets/images/shampoo1.jpg">
                <div class="shampoo-text">Product name</div>
                <div class="shampoo-text">Price</div> -->
                <img class="shampoo-image"  :src="getImage(product.image)">
                <div class="shampoo-text">{{ product.name }}</div>
                <div class="shampoo-text">$25,00</div>
            </div>
        

          <!-- <router-link to="/product">
          <button class="product-btn">
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/framboise.jpg">
                <div class="shampoo-text">Mousse de Rouge</div>
                <div class="shampoo-text">Price</div>
            </div>
          </button>
        </router-link> -->
            <!-- <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/framboise.jpg">
                <div class="shampoo-text">Mousse de Rouge</div>
                <div class="shampoo-text">Price</div>
            </div> -->
            

            
        </div>
    </div>

      <div>
       
        <div class="newsletter">
          <p> Stay in touch to join our newsletter 
          <br> 
          <input class="input" type="email" placeholder="Enter your email">
          </p>
          
          <!-- <p> Enter your email: </p> -->
          <button class="btn-subscribe"> Subscribe</button>
        </div>  
        <hr>
      </div>
    

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

  </div>
    <!-- <Header></Header> -->
    

   

    <!-- <Footer></Footer> -->
</template>
<style scoped>
        .content{
          margin-top: 25px;
        }

        .product-btn{
          border: none;
          background-color:  #F6F5EC;
        }

        .shampoo-products {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;

            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 30px;
            column-gap: 30px;
            row-gap: 30px;
            white-space: nowrap; 
        }

        .shampoo-image {
            width: 380px;
            height: 390px;
        }

        .shampoo-text {
          text-align: center;
          font-weight: 600;
          padding: 5px;
          opacity: 0;
          transition: opacity 0.3s ease;
        }

      .shampoo:hover .shampoo-text {
        opacity: 1;
      }
</style>