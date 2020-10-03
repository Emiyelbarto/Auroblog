<template>
  <div>redirecting...</div>
</template>

<script>
export default {
  asyncData({
    isDev,
    route,
    store,
    env,
    params,
    query,
    req,
    res,
    redirect,
    error,
  }) {
    window.location = 'https://browsehappy.com/'
  },
}
</script>
