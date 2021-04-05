<template>
  <div v-if="links.length > 3">
    <div class="flex flex-wrap -mb-1 text-white">
      <template v-for="(link, key) in links" :key="key">
        <div v-if="link.url === null" class="px-4 py-3 mb-1 mr-1 text-sm leading-4 text-gray-400 border rounded" v-html="link.label" />
        <inertia-link v-else class="px-4 py-3 mb-1 mr-1 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500" :class="{ 'bg-grey-500': link.active }" :href="link.url">{{ link.label }}</inertia-link>
      </template>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    links: Array,
  },
}
</script>