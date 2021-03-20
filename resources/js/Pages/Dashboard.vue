<template>
  <app-layout>
    <div class="py-12">
      <div class="mx-auto mb-10 border border-white max-w-7xl sm:px-6 lg:px-8">
        <latest-episode />
      </div>
      <div class="mx-auto mt-10 mb-10 border border-gray-600 max-w-7xl">
        <about-us />
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout"
import LatestEpisode from "../Jetstream/LatestEpisode.vue"
import AboutUs from "../Jetstream/AboutUs.vue"

export default {
  components: {
    AppLayout,
    LatestEpisode,
    AboutUs,
  },
}
</script>
<style lang="scss">
.underline {
  text-decoration-color: #0071cd;
}
</style>