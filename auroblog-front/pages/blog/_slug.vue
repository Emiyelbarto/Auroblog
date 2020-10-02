<template>
  <div class="container">
    <div class="text-black bg-aqua text-center">
      <h1 class="text-uppercase">{{ slugData.title }}</h1>
      <hr />
      <div class="row">
        <div class="col">
          <img :src="slugData.image" alt="slugData Image" />
        </div>
        <div class="col">
          <span v-html="slugData.content_md" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  asyncData({ params }) {
    const slug = params.slug
    return { slug }
  },
  computed: {
    slugData() {
      return this.$store.state.index.blog.dataView
    },
  },
  async mounted() {
    try {
      await Promise.all([this.getData(this.slug)])
    } catch (error) {
      console.error(error)
    }
  },
  methods: {
    getData(slug) {
      return this.$store.dispatch('index/blog/getBlogFromSlug', slug)
    },
  },
}
</script>
