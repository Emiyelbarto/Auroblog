<template>
  <div id="app">
    <router-view />
    <footer-blog />
  </div>
</template>

<script>
import footerBlog from "./components/footerBlog.vue";
export default {
  name: "App",
  components: {
    footerBlog,
  },
};
</script>

<style lang="scss">
//Poner css
</style>
