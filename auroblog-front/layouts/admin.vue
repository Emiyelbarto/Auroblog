<template>
  <div>
    <admin-sidebar></admin-sidebar>
    <div class="container">
      <admin-header />
    </div>
    <Nuxt />
    <div>
      <admin-footer />
    </div>
  </div>
</template>

<script>
import AdminHeader from '../components/adminHeader'
import AdminSidebar from '../components/adminSidebar'
import AdminFooter from '../components/adminFooter'
export default {
  components: {
    AdminHeader,
    AdminSidebar,
    AdminFooter,
  },
}
</script>
