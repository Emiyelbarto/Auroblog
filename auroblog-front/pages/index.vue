<template>
  <div class="container">
    <div class="py-12 bg-white">
      <div class="max-w-screen-xl mx-auto px-4">
        <div v-for="n in maxBlogs" :key="n" class="text-center">
          <b-card />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import BCard from '../components/Blog/BCard'
export default {
  components: {
    BCard,
  },
  data() {
    return {
      maxBlogs: 4,
      totalPages: 0,
      currentPage: 0,
      onchange: {},
    }
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
