<script>
  import axios from 'axios';

export default {
  name: 'about',
  data() {
    return {
      jsonData: null,
    };
  },
  mounted() {
    axios
      .get('http://localhost:3000/api/data')
      .then(response => {
        this.jsonData = response.data;
      })
      .catch(error => {
        console.error(error);
      });
  },
};

</script>

<!-- <script>
import Header from './HeaderView.vue'
import Footer from './FooterView.vue'

export default {
    name: 'ShampooView',
    components: {
        Header,
        Footer
    }
}
</script> -->

<template>
    <div class="body">
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

    <div class="content">
    <div class="about-hero-im">
      <img class="about-us-img" src="../assets/css/images/hero-im-3.jpg">
    </div>

    <!-- <div>
      <img src="../assets/css/images/aboutUs.jpg">
    </div> -->
        
    

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

        .about-hero-im{
          width: 100%;
          height:520px
          
        }

        .about-us-img{
          width: 100%;
          height: 520px;
        }

       
</style>