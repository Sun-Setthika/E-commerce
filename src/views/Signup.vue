<script>
  import axios from 'axios';
import HeaderView from './HeaderView.vue';

export default {
    name: 'Signup',
    data() {
       return{
        name: '',
        email: '',
        password: '',
       }
    },
    methods: {
      addUser(){
        const User = {
          name : this.name,
          email : this.email,
          password: this.password,
          role : "customer"
        };
        axios
          .post('http://localhost:8000/api/users/signup', User)
          .then(() => {
            console.log("successfully created user");
          // alert('Information added to customerInfo!');
          this.$router.push('/login');
          })
          .catch(error => {
          console.error('Error saving cart data to the database:', error);
          // Handle the error or show an error message to the user
          });
      }
    },
    components: { HeaderView }
};

</script>

<template>
    <div>
      <HeaderView/>

    <!-- content -->
    <div class="content">
      <h3> SIGNUP </h3>
      <form @submit.prevent="addUser">
        <div class="login">
          <div class="input-wrapper">
            <label class="username">Username: </label>
          <input type="text" name="username"  class="input-line" v-model="name"> 
        </div>
          <div class="input-wrapper">
            <label class="email">Email: </label>
          <input type="text" name="email" class="input-line" v-model="email"> 
        </div>
        <div class="input-wrapper">
            <label class="password"> Password: </label>
            <input type="text" name="password"  class="input-line" v-model="password"> 
        </div>
        </div>
        <button type="submit" class="btn"> SIGNUP </button>
      </form>
      <a href="/login" class="acc"> Back to login </a>

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
</template>

<style scoped>

.wrapper {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 100;
  }

  .header {
    position: relative; /* Add this line to make the header position relative */
  }
  

  .content{
    margin-top: 80px;
    padding-top: 100px;
    height: 600px;
    text-align: center;
    overflow-y: hidden;
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
    margin: 20px;
  }

  /* .input-wrapper label{
    margin-left: -17%;
  } */
  .input-wrapper .username{
    margin-left: -243px;
  }

  .input-wrapper .email{
    margin-left: -270px;
  }

  .input-wrapper .password{
    margin-left: -250px;
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
    font-weight: 500;
    height: 50px;
    font-size: medium;
    
  }

  .acc{
    display: block;
    text-decoration: none;
    color: black;
  }

  .acc:hover,
  .password a:hover{
    text-decoration: underline;
    transition:  0.3s ease;
  }
  
  


</style>

