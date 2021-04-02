<template>
  <app-layout>
    <template #header> </template>

    <div class="py-12">
      <div class="grid grid-cols-2 gap-4 text-white" v-for="episode in episodes" :key="episode.id">
        <div class="flex justify-end p-6">
          <img v-bind:src="'/images/chapter_logos/' + episode.chapter.logo_path" alt="Chapter Logo" class="my-auto h-70 w-80" />
        </div>

        <div class="flex p-6 justify-left">
          <ul class="my-auto">
            <li>
              <p class="p-3 italic text-white underline">Episode Title</p>
              <h1 class="pl-6 font-semibold text-left text-white bg-black title font-rakkas">{{ episode.title }}</h1>
            </li>
            <li>
              <p class="p-3 italic text-white underline">Description</p>
              <h2 class="pl-6 font-semibold text-left text-white bg-black title font-rakkas">{{ episode.long_description }}</h2>
            </li>
            <li>
              <p class="p-3 italic text-white underline">Explicit</p>
              <h2 class="pl-6 font-semibold text-left text-white bg-black title font-rakkas">{{ episode.explicit ? "Yes" : "No" }}</h2>
            </li>
            <li>
              <p class="p-3 italic text-white underline">Uploaded @</p>
              <h2 class="pl-6 font-semibold text-left text-white bg-black title font-rakkas">{{ moment(episode.created_at).format("Do MMM YYYY") }}</h2>
            </li>
            <li>
              <p class="p-3 italic text-white underline">Host</p>
              <h2 class="pl-6 font-semibold text-left text-white bg-black title font-rakkas">{{ episode.user.name }}</h2>
            </li>
            <li>
              <p class="p-3 italic text-white underline">Contact</p>
              <h2 class="pl-6 font-semibold text-left text-white bg-black title font-rakkas">{{ episode.author_email }}</h2>
            </li>
          </ul>
        </div>
      </div>
      <div class="flex justify-center mt-3">
        <audio class="w-3/4 rounded-full" controls>
          <source src="https://actions.google.com/sounds/v1/ambiences/coffee_shop.ogg" type="audio/ogg" />
        </audio>
      </div>
      <div></div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout"
import moment from "moment"

export default {
  props: {
    chapters: Object,
    episodes: Object,
    users: Object,
  },
  components: {
    AppLayout,
    moment,
  },
  methods: {
    moment: function (date) {
      return moment(date)
    },
  },
}
</script>

<style lang="scss">
.title {
  font-size: 1.25rem;
}
</style>