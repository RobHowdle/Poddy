<template>
  <app-layout>
    <template #header>
      <h2 class="p-3 text-xl font-semibold text-center text-white bg-black font-rakkas">All Episodes</h2>
    </template>

    <div>
      <div class="grid grid-cols-3 gap-5 p-10 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-3">
        <div class="w-full lg:max-w-full lg:flex" v-for="episode in episodes.data" :key="episode.id">
          <div class="flex-none h-48 p-4 overflow-hidden text-center bg-cover rounded-t lg:h-auto lg:w-48 lg:rounded-t-none lg:rounded-l" id="chapterLogos" alt="Logo"></div>
          <div class="flex flex-col justify-between w-full p-4 leading-normal bg-white border-b border-l border-r border-gray-400 rounded-b lg:border-l-0 lg:border-t lg:border-gray-400 lg:rounded-b-none lg:rounded-r">
            <div class="mb-8">
              <p class="flex items-center text-sm text-gray-600">{{ episode.explicit ? "E" : "" }}</p>
              <div class="mb-2 text-xl font-bold text-gray-900">{{ episode.title }}</div>
              <p class="text-base text-gray-700">{{ episode.short_description }}</p>
              <inertia-link :href="route('episode-listen', episode.id)">
                <button class="mt-5 backdrop bg-white bg-opacity-0 border border-green-500 px-3 py-1.5 rounded focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-40 hover:bg-opacity-10 hover:bg-green-500 text-lg">Listen Now</button>
              </inertia-link>
            </div>
            <div class="flex items-center">
              <div class="text-sm">
                <!-- <p class="leading-none text-gray-900">{{ episode.user.name }}</p> -->
                <!-- <p class="text-gray-600">{{ moment(episode.created_at).format("Do MMM YYYY") }}</p> -->
              </div>
            </div>
          </div>
        </div>
        <pagination class="mt-6" :links="episodes.links" />
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout"
// import moment from "moment"
import Pagination from "@/Shared/Pagination"

export default {
  props: {
    episodes: Object,
    chapters: Object,
    users: Object,
  },
  components: {
    AppLayout,
    Pagination,
  },

  methods: {
    moment: function (date) {
      return moment(date)
    },
  },
}
</script>

<style lang="scss">
#chapterLogos {
  background-position: center center;
}
</style>