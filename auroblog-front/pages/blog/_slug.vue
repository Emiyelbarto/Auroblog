<template>
  <div class="container">
    <h1>{{ slug }}</h1>
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
  asyncData({ params }) {
    const slug = params.slug
    return { slug }
  },
}
</script>
