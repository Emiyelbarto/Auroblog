<template>
  <div v-if="blog" id="BCard" class="max-w-sm w-full lg:max-w-full lg:flex">
    <div
      class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
      title="Blog Picture"
      :style="'background-image: url(' + blog.image + ')'"
    ></div>
    <div
      class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
    >
      <div class="mb-8">
        <div class="text-gray-900 font-bold text-xl mb-2">
          <a :href="'/blog/' + blog.slug">
            {{ blog.title }}
          </a>
        </div>
        <p class="text-gray-700 text-base">
          {{ blog.content }}
        </p>
      </div>
      <div class="flex items-center">
        <div class="text-sm">
          <p class="text-gray-600">{{ blog.created_at }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    blog: Object,
  },
  data() {
    return {
      blogPicture:
        "background-image: url('https://previews.123rf.com/images/antonioguillem/antonioguillem1801/antonioguillem180100009/92609198-portrait-of-a-pensive-woman-holding-a-coffee-mug-looking-at-side-sitting-on-a-sofa-in-the-living-roo.jpg')",
    }
  },
}
</script>
