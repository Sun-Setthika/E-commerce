<script>
  import axios from 'axios';

export default {
  name: 'LipCategory',
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
          <div class="icons">  <i class="fa fa-shopping-cart"></i> </div>
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
    
        <div>
        <!-- <div class="path">Home > <span class="current-path">Shampoo</span></div> -->
        <div class="shampoo-products">
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/framboise.jpg">
                <div class="shampoo-text">Mousse de Rouge</div>
                <div class="shampoo-text">Price</div>
            </div>
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/winter-red.jpg">
                <div class="shampoo-text">The Summer Red</div>
                <div class="shampoo-text">Price</div>
            </div>
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/lip.jpg">
                <div class="shampoo-text">Nude Lip Mousse</div>
                <!-- <div class="shampoo-text">Price</div> -->
            </div>
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/pivoine.jpg">
                <div class="shampoo-text">Pivoine</div>
                <!-- <div class="shampoo-text">Price</div> -->
            </div>
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/daphne.jpg">
                <div class="shampoo-text">daphne</div>
                <!-- <div class="shampoo-text">Price</div> -->
            </div>
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/frambroise.jpg">
                <div class="shampoo-text">Frambroise</div>
                <div class="shampoo-text">Price</div>
            </div>
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/rosier.jpg">
                <div class="shampoo-text">Mousse de rosier</div>
                <!-- <div class="shampoo-text">Price</div> -->
            </div>
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/moouse.jpg">
                <div class="shampoo-text">Mousse de praline</div>
                <!-- <div class="shampoo-text">Price</div> -->
            </div>
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/rouge.jpg">
                <div class="shampoo-text">Maroon</div>
                <!-- <div class="shampoo-text">Price</div> -->
            </div>
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/tulip.jpg">
                <div class="shampoo-text">Tulip</div>
                <!-- <div class="shampoo-text">Price</div> -->
            </div>
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/nude-and-red.jpg">
                <div class="shampoo-text">Crayons de garance</div>
                <!-- <div class="shampoo-text">Price</div> -->
            </div>
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/nude-pencils.jpg">
                <div class="shampoo-text">Crayons de nude</div>
                <div class="shampoo-text">Price</div>
            </div>
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/eye.jpg">
                <div class="shampoo-text">Lip balm</div>
                <!-- <div class="shampoo-text">Price</div> -->
            </div>
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/eye1.jpg">
                <div class="shampoo-text">Lip scrub</div>
                <!-- <div class="shampoo-text">Price</div> -->
            </div>
            <div class="shampoo">
                <img class="shampoo-image" src="../assets/css/images/brush.jpg">
                <div class="shampoo-text">Lip brush</div>
                <!-- <div class="shampoo-text">Price</div> -->
            </div>

            
        </div>
    </div>

      <div>
       
        <div class="newsletter">
          <p> Stay in touch to join our newsletter 
          <br>  Enter your email:
          <input class="email" type="text">
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

        .shampoo-products {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;

            padding-left: 57px;
            padding-right: 57px;
            padding-bottom: 30px;
            column-gap: 90px;
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