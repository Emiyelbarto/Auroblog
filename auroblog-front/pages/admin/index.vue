<template>
  <div class="py-10 px-auto">
    <div class="">
      <h1>Admin Page</h1>
    </div>
    <div>
      <p>Pagina para editar blogs siendo admin</p>
      <b-table striped hover :items="items"></b-table>
    </div>
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
  computed: {},
}
</script>
