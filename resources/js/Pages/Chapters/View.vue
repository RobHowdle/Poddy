<template>
  <app-layout>
    <div class="py-12" v-for="chapter in chapters" :key="chapter.id">
      <div class="grid grid-cols-1 gap-4 text-white">
        <div class="flex justify-center p-6">
          <img v-bind:src="'/images/chapter_logos/' + chapter.logo_thin_path" alt="Chapter Thin Logo" class="my-auto h-70 w-80" />
        </div>
      </div>
      <div class="grid justify-start grid-cols-2 p-6 text-white">
        <div>
          <p class="p-3 italic text-white underline title font-rakkas">A word from the creator...</p>
          <h2 class="pl-6 font-semibold text-left text-white bg-black font-rakkas">{{ chapter.about }}</h2>
        </div>

        <div class="flex justify-start p-6">
          <ul class="my-auto">
            <li>
              <h1 class="p-3 italic text-white underline title font-rakkas">The Chapter</h1>
              <h1 class="pl-6 font-semibold text-left text-white bg-black font-rakkas">{{ chapter.name }}</h1>
            </li>
            <li>
              <p class="p-3 italic text-white underline title font-rakkas">About the {{ chapter.name }}</p>
              <h2 class="pl-6 font-semibold text-left text-white bg-black font-rakkas">{{ chapter.description }}</h2>
            </li>
            <li>
              <p class="p-3 italic text-white underline title font-rakkas">Established</p>
              <h2 class="pl-6 font-semibold text-left text-white bg-black font-rakkas">{{ moment(chapter.created_at).format("Do MMM YYYY") }}</h2>
            </li>
            <li>
              <p class="p-3 italic text-white underline title font-rakkas">Host</p>
              <h2 class="pl-6 font-semibold text-left text-white bg-black font-rakkas">{{ chapter.user_id }}</h2>
            </li>
            <li>
              <p class="p-3 italic text-white underline title font-rakkas">Contact</p>
              <h2 class="pl-6 font-semibold text-left text-white bg-black font-rakkas">Host Email</h2>
            </li>
          </ul>
        </div>
      </div>
      <div><h1>Individual Host Social Media</h1></div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout"
import moment from "moment"

export default {
  props: {
    chapters: Object,
    users: Object,
  },
  components: {
    AppLayout,
  },
  data() {
    return {
      episodes: {},
      chapter: {
        user_id: null,
        users: {},
        name: null,
        about: null,
        description: null,
        logo_thin_path: null,
      },
    }
  },
  methods: {
    moment: function (date) {
      return moment(date)
    },
  },
}
</script>

<style lang="scss" scoped>
.title {
  font-size: 2rem;
}
</style>