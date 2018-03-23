import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


// use login component, gotta import it fam
import Login from '../components/login/Login'
const routes = [
  { path: '/login', component: Login },
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
  routes,  // short for `routes: routes`
  hashbang:false, // fix the # in url
  mode:'history'

})

// use router in app

export default router
// connect router file to app.js file
