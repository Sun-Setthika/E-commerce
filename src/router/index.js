import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/home/HomeView.vue'
import LandingPage from '../views/LandingPage.vue'
import LipCategory from '../views/LipCategory.vue'
import Login from '../views/Login.vue'
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
      path: '/lips',
      name: 'LipCategory',
      component: LipCategory
    }
  ]
})

export default router
