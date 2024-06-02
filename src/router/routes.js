const routes = [
  { path: "/", component: () => import("pages/SignInPage.vue") },
  { path: "/signup", component: () => import("pages/SignUpPage.vue") },
  {
    path: "/",
    component: () => import("layouts/MainLayout.vue"),
    children: [
      { path: "/shop", component: () => import("src/pages/ShopPage.vue") },
      { path: "/cart", component: () => import("pages/CartPage.vue") },
      { path: "/checkout", component: () => import("pages/CheckoutPage.vue") },
      { path: "/account", component: () => import("pages/AccountPage.vue") },
      { path: "/about", component: () => import("pages/AboutPage.vue") },
      { path: "/contact", component: () => import("pages/ContactPage.vue") },
      { path: "/details", component: () => import("pages/DetailsPage.vue") },
    ],
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: "/:catchAll(.*)*",
    component: () => import("pages/ErrorNotFound.vue"),
  },
];

export default routes;
