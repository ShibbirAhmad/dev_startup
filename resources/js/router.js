
import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import AdminDashboard from "./components/admin/Dashboard" ;
import Category from "./components/admin/category/Index" ;
import AddCategory from "./components/admin/category/Add" ;
import EditCategory from "./components/admin/category/Edit" ;


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

   },

    { 
    path: '/backend/category/list', 
    component: Category,
    name : 'category',
    meta: {  title:'category list' } 
    },
    
    { 
    path: '/backend/category/add', 
    component: AddCategory,
    name : 'add_category',
    meta: {  title:'category add' } 
    },
    { 
    path: '/backend/category/edit/:id', 
    component: EditCategory,
    name : 'edit_category',
    meta: {  title:'category edit' } 
    }


]


const router = new VueRouter({
  routes,
  mode:'history'
})



export default router;