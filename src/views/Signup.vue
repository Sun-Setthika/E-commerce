<script>
  import axios from 'axios';

export default {
  name: 'Signup',
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

<template>
    <div>
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
      <h3> SIGNUP </h3>
      <div class="login">
        <div class="input-wrapper">
        <label class="email">Email: </label>
        <input type="email"  class="input-line"> 
      </div>
      <div class="input-wrapper">
        <div class="password"> 
          <label> Password: </label>
          <a> forgot ?</a>
        </div>
        <input type="password"  class="input-line"> 
      </div>
      </div>
      <button class="btn"> LOGIN </button>
      <a class="acc"> Create an account </a>

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
</template>

<style scoped>
  .content{
    margin: auto;
    padding-top: 50px;
    height: 500px;
    text-align: center;
  }

  .content h3{
    font-size: 40px;
  }

  .input-line {
    display: block;
    border: none;
    border-bottom: 1px solid black;
    outline: none;
    width: 300px;
    padding: 5px;
    margin: auto;
    text-align: center;
  }

  .input-wrapper{
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 15px;
  }

  /* .input-wrapper label{
    margin-left: -17%;
  } */

  .input-wrapper .email{
    margin-left: -270px;
  }

  .password{
    display: flex;
    justify-content: space-between;
    gap: 190px;
  }

  .login{
    margin: auto;
  }

  .btn{
    width: 320px;
    border-radius: 30px;
    padding: 10px;
    border: 1px solid #EFE7DA;
    background-color: #EFE7DA;
    margin: 20px;
    
  }

  .acc{
    display: block;
    text-decoration: none;
  }

  .acc:hover,
  .password a:hover{
    text-decoration: underline;
    transition:  0.3s ease;
  }
  
  


</style>

