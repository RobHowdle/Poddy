<template>
  <app-layout>
    <div class="py-12">
      <div class="grid grid-cols-1 gap-4 text-white" v-for="chapter in chapters" :key="chapter.id">
        <div class="flex justify-center p-6">
          <img v-bind:src="'/images/chapter_logos/' + chapter.logo_thin_path" alt="Chapter Thin Logo" class="my-auto h-70 w-80" />
        </div>
      </div>
      <div class="grid grid-cols-2 gap-4 text-white" v-for="chapter in chapters" :key="chapter.id">
        <div class="flex justify-start p-6">
          <!-- <inertia-table :data="episodes" id="episodes.id" :columns="columns"></inertia-table> -->
        </div>

        <div class="flex p-6 justify-left">
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
              <p class="p-3 italic text-white underline title font-rakkas">Explicit</p>
              <h2 class="pl-6 font-semibold text-left text-white bg-black font-rakkas">Episode Count</h2>
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
import InertiaTable from "inertia-table"

export default {
  props: {
    chapters: Object,
    users: Object,
    episodes: Array,
  },
  components: {
    AppLayout,
    InertiaTable,
  },
  data() {
    return {
      chapter: {
        name: null,
        user_id: null,
        users: {},
        created_at: new Date(),
      },
      columns: ["title"],
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