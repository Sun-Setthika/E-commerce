import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/home/HomeView.vue'
import LandingPage from '../views/LandingPage.vue'
import LipCategory from '../views/LipCategory.vue'
import Sets from '../views/Sets.vue'
import ProductSetView from '../views/ProductSetView.vue'
import Login from '../views/Login.vue'
import Signup from '../views/Signup.vue'
import Cart from '../views/Cart.vue'
import CartPopUp from '../views/CartPopUp.vue'
import Checkout from '../views/Checkout.vue'
import ConfirmView from '../views/ConfirmView.vue'
import PaymentMethod from '../views/PaymentMethod.vue'
import ShippingView from '../views/ShippingView.vue'
import AboutView from '../views/AboutView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/', //root url
      name: 'home',
      component: HomeView //to use about view we need to import
    },
    {
      path: '/about',
      name: 'about',
      
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/product',
      name: 'product',
      component: () => import('../views/ProductsView.vue')
    },
    {
      path: '/welcome',
      name: 'LandingPage',
      component: LandingPage
    },
    {
      path: '/login',
      name: 'Login',
      component: () => import('../views/Login.vue')
    },
    {
      path: '/signup',
      name: 'Signup',
      component: Signup
    },
    {
      path: '/cart',
      name: 'Cart',
      component: Cart
    },
    {
      path: '/cartpopup',
      name: 'CartPopUp',
      component: CartPopUp
    },
    {
      path: '/checkout',
      name: 'Checkout',
      component: Checkout
    },
    {
      path: '/paymentmethod',
      name: 'PaymentMethod',
      component: PaymentMethod
    },
    {
      path: '/shippingview',
      name: 'ShippingView',
      component: ShippingView
    },
    {
      path: '/confirmview',
      name: 'ConfirmView',
      component: ConfirmView
    },
    {
      path: '/lips',
      name: 'LipCategory',
      component: LipCategory
    },
    {
      path: '/sets',
      name: 'Sets',
      component: Sets
    },
    {
      path: '/productsetview',
      name: 'ProductSetView',
      component: ProductSetView
    }
  ]
})

export default router
