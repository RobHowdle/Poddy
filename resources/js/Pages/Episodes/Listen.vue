<template>
  <app-layout>
    <template #header> </template>

    <div class="py-12">
      <div class="grid grid-cols-3 gap-4 text-white" v-for="episode in episodes" :key="episode.id">
        <div>
          <img v-bind:src="episode.chapter.logo_path" />
        </div>

        <div>
          <h2 class="p-3 text-xl font-semibold text-left text-white bg-black font-rakkas">{{ episode.title }}</h2>
          <h2 class="p-3 text-xl font-semibold text-left text-white bg-black font-rakkas">{{ episode.long_description }}</h2>
          <h2 class="p-3 text-xl font-semibold text-left text-white bg-black font-rakkas">{{ episode.explicit ? "Yes" : "No" }}</h2>
          <h2 class="p-3 text-xl font-semibold text-left text-white bg-black font-rakkas">AUTHOR</h2>
          <h2 class="p-3 text-xl font-semibold text-left text-white bg-black font-rakkas">AUTHOR EMAIL</h2>

          <audio controls>
            <source src="https://actions.google.com/sounds/v1/ambiences/coffee_shop.ogg" type="audio/ogg" />
          </audio>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout"

export default {
  props: {
    chapters: Object,
    episodes: Object,
    users: Object,
  },
  components: {
    AppLayout,
  },
}
</script>

<style lang="scss">
</style>