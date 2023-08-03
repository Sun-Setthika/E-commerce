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
            Paris Cosmetic is the number one global cosmetics brand and is available in over 129 countries worldwide. Offering more than 200 products, 
            Paris Cosmetic combines technologically advanced formulas with on-trend expertise to create accessible cosmetics with a cool,
            urban edge and a spirited style. Maybelline New York is the official sponsor of New York Mercedes-Benz Fashion Week.
            In 1913, young Chicago chemist Thomas Williams had a dilemma. His older sister, Maybel, was in love with a man who was in love with someone else. Maybel Williams did her best with what was available—she used petroleum jelly on her 
            lashes and brows to enhance them. Her brother decided to help her increase her allure by adding carbon dust to the petroleum jelly, which darkened her lashes and brows more dramatically. The product worked. In 1915, Maybel got her man and Thomas founded what would become the global industry giant, 
            Paris Cosmetice, named after the bride and her favourite beauty aid.
          </p>
          <p>
            Two years later, Williams introduced Maybelline Cake Mascara, the first modern eye cosmetic made for everyday use. Initially available only through mail order, 
            it was so popular that women began to ask for it in drugstores. The signature red Eyebrow Pencil followed, along with coloured eyeshadows and complementary eyeliners, leading the youthful, flapper fashion trend of dramatic makeup. Maybelline became the first cosmetic company to advertise on radio and sales boomed. In 1932, responding to incessant demand,
             Maybelline introduced a special 10-cent package of Cake Mascara for retail sale. And the rest, as they say, is history!
          </p>
        </div>
        <h1> MAKE IT HAPPEN </h1>
    </div>



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
    <!-- <Header></Header> -->
    

   

    <!-- <Footer></Footer> -->
</template>
<style scoped>

  h1{
    text-align: center;
    font-size: 60px;
  }
  .content{
    height: 1500px;
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
  padding: 0 10%;
  font-size: 18px;
 }

  

       
</style>