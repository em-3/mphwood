import { createRouter, createWebHistory } from 'vue-router'
import { titleGuard, metaGuard } from "./guards"

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: "/",
            name: "home",
            component: () => import("@/views/HomeView.vue"),
            meta: {
                documentTitle: "Home"
            }
        },
        {
            path: "/products",
            name: "products",
            component: () => import("@/views/ProductsView.vue"),
            meta: {
                documentTitle: "Products"
            }
        },
        {
            path: "/about",
            name: "about",
            component: () => import("@/views/AboutView.vue"),
            meta: {
                documentTitle: "About"
            }
        },
        {
            path: "/:url(.*)",
            name: "notfound",
            component: () => import("@/views/404View.vue"),
            props: true,
            meta: {
                documentTitle: "Page Not Found",
                metaTags: [
                {
                    name: "robots",
                    content: "noindex"
                }
                ]
            }
        }
    ],
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return {
                top: 0,
                behavior: "smooth"
            }
        }
    }
})

router.beforeEach(titleGuard)

router.beforeEach(metaGuard)

export default router
