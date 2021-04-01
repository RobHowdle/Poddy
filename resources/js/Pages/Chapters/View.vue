<template>
  <app-layout>
    <div class="py-12">
      <div class="grid grid-cols-1 gap-4 text-white" v-for="chapter in chapters" :key="chapter.id">
        <div class="flex justify-center p-6">
          <img v-bind:src="'/images/chapter_logos/' + chapter.logo_thin_path" alt="Chapter Thin Logo" class="my-auto h-70 w-80" />
        </div>
      </div>
      <div class="grid grid-flow-col text-white auto-cols-max">
        <div class="flex justify-start w-full p-6">
          <ul>
            <li>{{ episodes }}</li>
          </ul>
          <!-- <table class="border border-separate table-auto border-red-original" v-for="chapter in chapters" :key="chapter.id">
            <thead>
              <tr class="text-center">
                <td >Title</td>
                <td>Description</td>
                <td>Duration</td>
              </tr>
            </thead>
            <tbody>
              <tr v-for="episode in chapter.episode" :key="episode.id">
                <td>{{ episode.title }}</td>
                <td>{{ episode.short_description }}</td>
                <td>30:00</td>
              </tr>
            </tbody>
          </table> -->
        </div>

        <div class="flex justify-end p-6">
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
// import InertiaTable from "inertia-table"
import axios from "axios"

export default {
  props: {
    chapters: Object,
    users: Object,
    // episodes: Array,
  },
  components: {
    AppLayout,
    // InertiaTable,
    axios,
  },
  mounted() {
    // axios.get("chapters.episodes").then((response) => (this.episodes = response))
    axios.get("chapters.episodes").then((response) => (this.episodes = response.data.episodes))
  },
  data() {
    return {
      episodes: {},
      chapter: {
        name: null,
        user_id: null,
        users: {},
        episode_id: null,
        episodes: {},
        created_at: new Date(),
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