<script>

export default {
    name: 'ConfirmView',
    components: {
      
    },
};
</script>

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
            <a href="/login"> <i class="fa fa-user"></i> 
            </a>
            </div>
          <div class="icons">
              <a href="/">
                <i class="fa fa-shopping-cart"></i>
              </a> 
            </div>
        </div>
      </div>
      <div class="nav">
        <a href="/welcome">Welcome</a>
         <p class="dot">&#183;</p> 
        
        <a href="/" >Home</a>
         <p class="dot">&#183;</p>
        
        <a  href="/lips">Lips</a> 
        <p class="dot">&#183;</p>
       
        <a>Sets</a> 
        <p class="dot">&#183;</p>
        
        <a>About Us</a>
        
      </div>
    </div>

    <!-- content -->
    <div class="content">
        <div class="order-confirmed">
            <h4> Order 131217312 Confirmed </h4>
            <hr>
            <p> hello@pariscosmetic.com to me</p>
        </div>
        <div class="desc">
            <h3>
                Paris Cosmetic
            </h3>
            <div class="order-desc">
                <p> Hi kenny, we're getting your order ready to be shipping. We will nofity you when it has been sent</p>
                <router-link to="/cart">
                    <button class="btn"> View your order </button>
                </router-link>
            </div>
        </div>
        <hr>
        
        <div class="order-details">
            <div class="review">
                <div>
                    <div>
                        <img>
                    </div>
                    <div></div>
                    <div></div>
                </div>
                <div class="address">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="summary">

            </div>
        </div>

        



    </div>
    <hr>
    <!-- footer  -->
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
   
    


    
</template>

<style scoped>
    .content{
        margin: auto;
        padding: 15px 30px;
        height: 600px;
        overflow-y: hidden;
    }

    h4{
        margin-bottom: 0;
        font-weight: 700px;
    }

    .order-confirmed p,
    .order-desc
    {
        margin-top: 0;
        font-size: 16px;
        font-weight: 700px;
    }
    
    .desc{
        margin-bottom: 18px;
    }

    h3{
        font-size: 25px;
        font-weight: bold;
        margin-bottom: 20px;

    }

    .btn{
        background-color: black;
        color: white;
        padding: 5px 20px;
    }

    .order-details{
        display: flex;
        justify-content: space-between;
    }

    

</style>