import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: () => import("@/views/HomeView.vue")
    },
    {
      path: "/products",
      name: "products",
      component: () => import("@/views/ProductsView.vue")
    },
    {
      path: "/about",
      name: "about",
      component: () => import("@/views/AboutView.vue")
    },
    {
      path: "/:url(.*)",
      name: "notfound",
      component: () => import("@/views/404View.vue"),
      props: true
    }
  ]
})

export default router
