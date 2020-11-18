
import Vue from 'vue'
import VueRouter from 'vue-router'

import AdminDashboard from "./components/admin/Dashboard"
Vue.use(VueRouter)

const Foo = { template: '<div>public </div>' }


const routes = [
  { path: '/', 
    component: Foo,
    name: 'home'
   },
  { 
    path: '/backend/admin/dashboard', 
    component: AdminDashboard,
    name : 'admin_dashboard',

   }
]


const router = new VueRouter({
  routes,
  mode:'history'
})



export default router;