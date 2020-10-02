<template>
  <div class="container">
    <div class="text-black bg-aqua text-center">
      <h1 class="text-uppercase">titulo del blog</h1>
      <hr />
      <div class="row">
        <div class="col">imagen blog</div>
        <div class="col">texto blog</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      id: 0,
    }
  },
  computed: {
    blog() {
      return this.$store.state.index.blogs.data
    },
  },
  methods: {
    getBlog() {
      this.$store.dispatch('/index/blog/' + this.id)
    },
  },
}
</script>
