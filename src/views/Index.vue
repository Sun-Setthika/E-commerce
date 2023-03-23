<template>
<header>
    
    <!-- <div class="wrapper"> -->
      <!-- <HelloWorld msg="You did it!" /> -->

      <!-- <nav>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/about">About</RouterLink>
        <RouterLink to="/product">product</RouterLink>
        <button @click="$emit('checkout')"> Go to checkout </button>
        <button @click="$emit('home1')">Home</button>
      </nav>
    </div> -->
  </header>

  <!-- when we click router link it will render and replace the router link with router view to redirect to that page -->
  <RouterView /> 
</template>