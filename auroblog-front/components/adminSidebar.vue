<template>
  <div>
    <b-sidebar
      id="sidebar-dark"
      title="Admin"
      bg-variant="dark"
      text-variant="light"
      shadow
    >
      <div class="px-3 py-2">
        <b-img
          src="https://www.auronix.mx/hubfs/Auronix_May2017/Images/LogoAuronix1.png"
          fluid
          thumbnail
        ></b-img>

        <div>
          <span>blog test</span>
        </div>
      </div>
    </b-sidebar>
  </div>
</template>

<script>
export default {
  computed: {
    blogs() {
      return this.$store.state.admin.blogs
    },
  },
}
</script>
