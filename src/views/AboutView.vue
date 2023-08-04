<script>
  import axios from 'axios';
  import HeaderView from './HeaderView.vue';

export default {
  name: 'about',
  components: {
    HeaderView,
  }
 
};

</script>

<template>
    <div>
    <HeaderView/>

    <div class="content">
    <div class="about-hero-im">
      <img class="about-us-img" src="../assets/css/images/hero-im-3.jpg">
    </div>
    <div>
        <h1> ABOUT </h1>
        <h1> PARIS COSMETIC </h1>
        <div class="desc">
          <p>
            Paris Cosmetic's objective is to establish itself as the leading global cosmetics brand, renowned for its presence in over 129 countries and 
            offering a wide range of more than 200 technologically advanced and on-trend cosmetic products. The brand prides itself on creating accessible cosmetics that possess a cool, 
            urban edge and a spirited style, appealing to customers worldwide.To achieve its objective, Paris Cosmetic has set several key goals. 
            Firstly, the brand aims to expand its global presence by 
            increasing market penetration in strategic regions with high growth potential. By establishing a wider distribution network, the brand can reach more customers and further solidify its position as 
            a global industry giant.
            Innovation is at the heart of Paris Cosmetic's goals. The brand is committed to investing in research and development to continuously introduce cutting-edge formulas and innovative products. By staying ahead of beauty trends and meeting diverse customer needs, 
            Paris Cosmetic aims to remain at the forefront of the cosmetics industry. Sustainability is a core value that Paris Cosmetic seeks to uphold. The brand is committed to implementing sustainable practices and eco-friendly packaging solutions, aligning with the increasing demand for environmentally conscious products. By prioritizing sustainability, Paris Cosmetic aims to position itself as a responsible and ethical beauty brand.
          </p>
          <p>
            Two years later, Williams introduced Maybelline Cake Mascara, the first modern eye cosmetic made for everyday use. Initially available only through mail order, 
            it was so popular that women began to ask for it in drugstores. The signature red Eyebrow Pencil followed, along with coloured eyeshadows and complementary eyeliners, leading the youthful, flapper fashion trend of dramatic makeup. Maybelline became the first cosmetic company to advertise on radio and sales boomed. In 1932, responding to incessant demand,
             Maybelline introduced a special 10-cent package of Cake Mascara for retail sale. And the rest, as they say, is history!
          </p>
        </div>
        <h1> MAKE IT HAPPEN </h1>
    </div>

    <div>
      <img src="../assets/css/images/hero-im-2.jpg">
      <img src="../assets/css/images/hero-im-1.jpg" class="footer-img">
    </div>


  </div>  
    <hr>
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
    <!-- <Header></Header> -->
    

   

    <!-- <Footer></Footer> -->
</template>
<style scoped>

  h1{
    text-align: center;
    font-size: 60px;
  }
  .content{
    height: 1700px;
    overflow: hidden;
  }

  .about-hero-im{
    width: 100%;
    height:520px
          
 }

  .about-us-img{
    width: 100%;
    height: 520px;
 }

 .desc{
  text-align: center;
  padding: 0 13%;
  font-size: 18px;
 }

 .footer-img{
  height: 400px;
  width: 100%;
 }

  

       
</style>