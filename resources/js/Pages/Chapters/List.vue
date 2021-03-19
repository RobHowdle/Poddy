<template>
  <app-layout>
    <template #header>
      <h2 class="p-3 text-xl font-semibold text-center text-white bg-black font-rakkas">The UKGS Family</h2>
    </template>

    <div class="py-12">
      <div class="flex flex-wrap items-center justify-center w-full min-h-screen gap-3 py-5 bg-image">
        <div v-for="chapter in chapters" :key="chapter.id" class="w-10/12 p-3 text-white bg-white border border-gray-300 rounded shadow-lg backdrop md:w-1/4 bg-opacity-10">
          <!-- header -->
          <div class="w-full pb-3 mb-3 border-b border-white border-1">
            <h3 class="text-xl font-semibold text-center text-shadow">{{ chapter.name }}</h3>
          </div>
          <!-- body -->
          <div>
            <img v-bind:src="chapter.logo_path" alt="image1" class="object-cover w-full h-48 mb-2" />
            <p class="mb-3 text-base tracking-wide text-center text-shadow">
              {{ chapter.description }}
            </p>
            <p>Established: {{ moment(chapter.created_at).format("DD-MM-YYYY") }}</p>
            <button class="backdrop bg-white bg-opacity-0 border border-white px-3 py-1.5 rounded focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-40 hover:bg-opacity-10 text-lg">View Chapter</button>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout"
import moment from "moment"

export default {
  props: {
    chapters: Object,
  },
  components: {
    AppLayout,
  },
  data() {
    return {
      chapter: {
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

<style lang="scss">
.backdrop {
  backdrop-filter: blur(5px);
}
.text-shadow {
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
}
</style>