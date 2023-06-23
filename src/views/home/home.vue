<script>
  import axios from 'axios';

export default {
  name: 'HomeView',
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
  <div class="h-screen flex flex-col">
    <div class="w-full bg-gray-100">
      <div class="flex items-center justify-between p-2">
        <div class="flex items-center space-x-1">
          <div class="p-2"><i class="fa fa-bars"></i></div>
          <div class="p-2"><i class="fa fa-search"></i></div>
        </div>
        <h1 class="text-xl">Paris Cosmetic</h1>
        <div class="flex items-center space-x-1">
          <div class="p-2"><i class="fa fa-user"></i></div>
          <div class="p-2"><i class="fa fa-shopping-cart"></i></div>
        </div>
      </div>
      <div class="flex justify-center bg-gray-100">
        <a class="px-4 py-2">Home</a>
        <a class="px-4 py-2">Lips</a>
        <a class="px-4 py-2">Sets</a>
        <a class="px-4 py-2">About Us</a>
      </div>
    </div>

    <div class="flex-grow overflow-y-auto">
      <div class="h-96 bg-yellow-200 p-2">
        <img class="w-full h-full object-cover" src="../../assets/css/images/hero-image.jpg">
      </div>
      <div class="bg-yellow-200">
        <h3 class="bg-yellow-200 text-center h-12 pt-4">Discover our Bestselling Products</h3>
      </div>
     
      <div class="flex pl-57 pr-57 mb-30 overflow-x-auto whitespace-nowrap">
        <div class="flex-none w-272 h-270">
          <img class="w-full h-full" src="../../assets/css/images/brush.jpg">
          <div class="text-center">Product name</div>
          <div class="text-center">Price</div>
        </div>
        <div class="flex-none w-272 h-270">
          <img class="w-full h-full" src="../../assets/css/images/daphne.jpg">
          <div class="text-center">Product name</div>
          <div class="text-center">Price</div>
        </div>
        <div class="flex-none w-272 h-270">
          <img class="w-full h-full" src="../../assets/css/images/cafe-gourmand.jpg">
          <div class="text-center">Product name</div>
          <div class="text-center">Price</div>
        </div>
        <div class="flex-none w-272 h-270">
          <img class="w-full h-full" src="../../assets/css/images/frambroise.jpg">
          <div class="text-center">Product name</div>
          <div class="text-center">Price</div>
        </div>
        <div class="flex-none w-272 h-270">
          <img class="w-full h-full" src="../../assets/css/images/rosier.jpg">
          <div class="text-center">Product name</div>
          <div class="text-center">Price</div>
        </div>
        <div class="flex-none w-272 h-270">
          <img class="w-full h-full" src="../../assets/css/images/nude-pencils.jpg">
          <div class="text-center">Product name</div>
          <div class="text-center">Price</div>
        </div>
      </div>

      <div>
        <div class="relative">
          <div class="w-full">
            <img class="w-full object-contain" src="../../assets/css/images/quote.jpg">
          </div>
          <div class="absolute top-60% left-85%">
            <button class="px-4 py-2 border rounded-full bg-yellow-200 border-black">About us</button>
          </div>
          <p class="text-white bg-black text-center h-35 pt-8">Get <span class="font-bold">10% off</span> your first purchase</p>
        </div>
        <div class="flex justify-between h-100">
          <i class="fa fa-user mt-3 ml-5"></i>
          <p class="w-500">a Mousse de Rouge, our signature product with a creamy texture and velvet finish, accompanied by our double-ended Lip Brush.</p>
          <img src="../../assets/css/images/nude-and-red.jpg" class="w-100 h-100 object-cover">
        </div>
        <div class="bg-yellow-200 pt-1 pb-2 relative">
          <p class="text-center pb-5 mb-1">Stay in touch to join our newsletter</p>
          <p class="text-center">
            Enter your email:
            <input class="border-none" type="text">
          </p>
          <button class="absolute top-30% left-70% px-4 py-2 border rounded-full bg-yellow-200 border-black">Subscribe</button>
        </div>  
        <hr>
      </div>

    <div class="flex justify-between">
      <div class="flex items-center ml-8">
        <a>CONTACT US</a>
        <i class="fa fa-instagram mx-1"></i>
        <i class="fa fa-facebook mx-1"></i>
        <i class="fa fa-twitter mx-1"></i>
      </div>
      <div class="flex items-center ml-5">
        <i class="fa fa-cc-mastercard mx-1"></i>
        <i class="fa fa-cc-visa mx-1"></i>
        <i class="fa fa-paypal mx-1"></i>
      </div>
    </div>
  </div>
</div>
</template>
