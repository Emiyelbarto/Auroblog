<template>
  <div class="container">
    <div class="py-12 bg-white">
      <div class="max-w-screen-xl mx-auto px-4">
        <div v-for="n in blogLength" :key="n" class="row text-center py-6">
          <b-card :blog="blogs[n]" />
          <!-- <div v-for="m in maxColBlogs" :key="m" class="col-6 mt-md-0 mt-3">
          </div> -->
        </div>
      </div>
      <section>
        <paginate
          :page-count="totalPages"
          :click-handler="getBlogs"
          :prev-text="'Prev'"
          :next-text="'Next'"
          :container-class="'className'"
        >
        </paginate>
        {{ $ua }}
      </section>
    </div>
  </div>
</template>

<script>
import BCard from '@/components/Blog/BCard'
export default {
  components: {
    BCard,
  },
  data() {
    return {}
  },
  computed: {
    blogs() {
      return this.$store.state.index.blog.data
    },
    blogLength() {
      return this.$store.state.index.blog.data.length
    },
    totalPages() {
      return this.$store.state.index.blog.totalPages
    },
    currentPage: {
      get() {
        return this.$store.state.index.blog.currentPage
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
    } catch (error) {
      console.error(error)
    }
  },
  beforeDestroy() {
    this.$store.commit('index/blog/SET_CURRENT_PAGE', 1)
  },
  methods: {
    getBlogs(queryParams) {
      if (!isNaN(queryParams)) {
        console.log('el query params no llego bien')
        queryParams = `?page=${queryParams}`
        return this.$store.dispatch('index/blog/getBlogs', queryParams)
      } else {
        console.log('el query params llego bien')
        return this.$store.dispatch('index/blog/getBlogs', queryParams)
      }
    },
    detectBrowser() {
      const deviceType = this.$ua.deviceType()
      this.deviceType = deviceType
      console.log(deviceType)
    },
  },
}
</script>

<style>
/* Sample `apply` at-rules with Tailwind CSS
.container {
@apply min-h-screen flex justify-center items-center text-center mx-auto;
}
*/
.container {
  margin: 0 auto;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.title {
  font-family: 'Quicksand', 'Source Sans Pro', -apple-system, BlinkMacSystemFont,
    'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
  display: block;
  font-weight: 300;
  font-size: 100px;
  color: #35495e;
  letter-spacing: 1px;
}

.subtitle {
  font-weight: 300;
  font-size: 42px;
  color: #526488;
  word-spacing: 5px;
  padding-bottom: 15px;
}

.links {
  padding-top: 15px;
}
</style>
