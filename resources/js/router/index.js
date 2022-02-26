// CODE FOR ROUTER
import { createWebHistory, createRouter } from "vue-router";
import Home from "../components/pages/Home.vue";
import About from "../components/pages/About.vue";
import Listen from "../components/pages/Listen.vue";
import Events from "../components/pages/Events.vue";
import Other from "../components/pages/Other.vue";

const routes = [
  // Below are project component
  {
    path: "/",
    name: "listen",
    component: Listen,
  },
  {
    path: "/",
    name: "events",
    component: Events,
  },
  // Below are testing components
  {
    path: "/",
    name: "home",
    component: Home,
  },
  {
    path: "/",
    name: "about",
    component: About,
  },
  {
    path: "/",
    name: "other",
    component: Other,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
// END CODE FOR ROUTER