<script>
  import axios from 'axios';
import HeaderView from './HeaderView.vue';

export default {
    name: 'Signup',
    components: {
      HeaderView,
    },
    data() {
        return {
            email: '',
            password: '',
            users: [],
        };
    },
    created() {
        this.fetchUser();
    },
    methods: {
        fetchUser() {
            console.log(this.email, 'chem:', this.password);
            axios.get(`http://localhost:8000/api/users`)
                .then(response => {
                this.users = response.data;
                console.log(this.users);
            })
                .catch(error => {
                console.error(error);
            });
        },
        handleLoginSuccess() {
            // Save the login status to Local Storage
            localStorage.setItem('isLoggedIn', 'true');
            // Redirect the user to the home page or any other page after successful login
            this.$router.push('/');
        }
    },
    computed: {
        isTrue() {
            return this.users.some((user) => user.password == this.password && user.email == this.email);
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
      <h3> LOGIN </h3>
      <form>
        <div class="login">
          <div class="input-wrapper">
          <label class="email">Email: </label>
          <input type="text" name="email"  class="input-line" v-model="email"> 
        </div>
        <div class="input-wrapper">
          <div class="password"> 
            <label> Password: </label>
            <a> forgot ?</a>
          </div>
          <input type="text" name="password" class="input-line" v-model="password"> 
        </div>
        </div>

        <div v-if="isTrue">
            <router-link to="/">
                <button type="submit" class="btn"  @click="handleLoginSuccess">LOGIN</button>
                <a href="/signup" class="acc"> Create an account </a>
            </router-link>
          </div>

        <div v-else disabled>
              <button type="submit" class="btn">LOGIN</button>
              <a href="/signup" class="acc"> Create an account </a> 
        </div>
        <!-- <button type="submit" class="btn"> LOGIN </button>
        <a href="/signup" class="acc"> Create an account </a> -->
      </form>
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
    margin-top: 120px;
    padding-top: 100px;
    height: 550px;
    text-align: center;
    overflow-y: hidden;
  }

  .content h3{
    font-size: 40px;
    margin-top: 0;
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

