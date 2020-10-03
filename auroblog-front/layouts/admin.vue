<template>
  <div>
    <div class="bg-gray-200 py-10 px-auto">
      <admin-sidebar></admin-sidebar>
      <admin-header />
      <div class="container bg-gray-400">
        <Nuxt />
      </div>
    </div>
  </div>
</template>

<script>
import AdminHeader from '../components/adminHeader'
import AdminSidebar from '../components/adminSidebar'
export default {
  components: {
    AdminHeader,
    AdminSidebar,
  },
}
</script>
