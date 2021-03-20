<template>
  <app-layout>
    <template #header>
      <h2 class="p-3 text-xl font-semibold text-center text-white bg-black font-rakkas">All Episodes</h2>
    </template>

    <div>
      <div class="grid grid-cols-3 gap-5 p-10 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-3">
        <div class="w-full lg:max-w-full lg:flex" v-for="episode in episodes" :key="episode.id">
          <div class="flex-none h-48 p-4 overflow-hidden text-center bg-cover rounded-t lg:h-auto lg:w-48 lg:rounded-t-none lg:rounded-l" id="chapterLogos" v-bind:style="{ 'background-image': 'url(' + '/images/chapter_logos/' + episode.chapter.logo_path + ')' }" alt="Logo"></div>
          <div class="flex flex-col justify-between w-full p-4 leading-normal bg-white border-b border-l border-r border-gray-400 rounded-b lg:border-l-0 lg:border-t lg:border-gray-400 lg:rounded-b-none lg:rounded-r">
            <div class="mb-8">
              <p class="flex items-center text-sm text-gray-600">
                {{ episode.explicit ? "E" : "" }}
                <!-- <svg class="w-3 h-3 mr-2 text-gray-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                </svg> -->
              </p>
              <div class="mb-2 text-xl font-bold text-gray-900">{{ episode.title }}</div>
              <p class="text-base text-gray-700">{{ episode.short_description }}</p>
              <inertia-link :href="route('episode-listen', episode.id)">
                <button class="mt-5 backdrop bg-white bg-opacity-0 border border-green-500 px-3 py-1.5 rounded focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-40 hover:bg-opacity-10 hover:bg-green-500 text-lg">Listen Now</button>
              </inertia-link>
            </div>
            <div class="flex items-center">
              <div class="text-sm">
                <p class="leading-none text-gray-900">{{ episode.user_id }}</p>
                <p class="text-gray-600">{{ episode.created_at }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout"

export default {
  props: {
    episodes: Object,
    chapters: Object,
    user: Object,
  },
  components: {
    AppLayout,
  },
}
</script>

<style lang="scss">
#chapterLogos {
  background-position: center center;
}
</style>