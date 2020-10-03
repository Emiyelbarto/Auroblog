<template>
  <div class="py-10 px-auto">
    <div class="">
      <h1>Admin Page</h1>
    </div>
    <div>
      <p>Pagina para editar blogs siendo admin</p>
      <b-table striped hover :items="blogs"></b-table>
    </div>
    {{ blogs }}
  </div>
</template>

<script>
export default {
  layout: 'admin',
  data() {
    return {
      items: [
        {
          blog: 'title',
          content: 'content',
          created_at: 'date',
          action: 'icon',
        },
        {
          blog: 'title',
          content: 'content',
          created_at: 'date',
          action: 'icon',
        },
        {
          blog: 'title',
          content: 'content',
          created_at: 'date',
          action: 'icon',
        },
        {
          blog: 'title',
          content: 'content',
          created_at: 'date',
          action: 'icon',
        },
      ],
    }
  },
  computed: {
    blogs() {
      return this.$store.state.admin.blog.data
    },
    blogLength() {
      return this.$store.state.admin.blog.data.length
    },
    totalPages() {
      return this.$store.state.admin.blog.totalPages
    },
    currentPage: {
      get() {
        return this.$store.state.admin.blog.currentPage
      },

      set(value) {
        const queryParams = `?page=${value}`
        this.getBlogs(queryParams)
      },
    },
  },
  async mounted() {
    try {
      await Promise.all([this.getBlogs('')])
    } catch (error) {}
  },
  beforeDestroy() {
    this.$store.commit('admin/blog/SET_CURRENT_PAGE', 1)
  },
  methods: {
    getBlogs(queryParams) {
      return this.$store.dispatch('admin/blog/getData', queryParams)
    },
  },
}
</script>
