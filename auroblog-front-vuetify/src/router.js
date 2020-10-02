import Vue from "vue";
import Router from "vue-router";
import NotFound from "./views/NotFound.vue";
import HomePage from "./views/HomePage.vue";
import Blog from "./views/Blog.vue";

Vue.use(Router);

export default new Router({
  mode: "history",
  routes: [
    {
      path: "/",
      name: "home-page",
      component: HomePage,
    },
    {
      path: "/blog/:uid",
      name: "blog",
      component: Blog,
    },
    {
      path: "/not-found",
      name: "not-found",
      component: NotFound,
    },
    {
      path: "*",
      redirect: { name: "not-found" },
    },
  ],
});
