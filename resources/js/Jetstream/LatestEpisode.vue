<template>
  <div class="text-center">
    <div class="p-6 bg-black border-b border-red-liverpool sm:px-20">
      <div>
        <jet-application-logo class="block w-auto h-12 mx-auto" />
      </div>
      <div class="mt-8 text-4xl text-white font-rakkas">Latest Episode</div>
    </div>

    <div class="grid grid-flow-col grid-cols-2 gap-4 pt-4 bg-black" v-for="episode in episodes" :key="episode.id">
      <div class="flex justify-center p-6">
        <img v-bind:src="episode.chapter.logo_path" alt="Chapter Logo" class="w-70 h-80" />
      </div>

      <div class="my-auto bg-gray-200 bg-opacity-25 border border-gray-200" v-for="episode in episodes" :key="episode.id">
        <div class="p-6">
          <div>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 mx-auto text-gray-400">
              <path d="M12 1c-4.97 0-9 4.03-9 9v7c0 1.66 1.34 3 3 3h3v-8H5v-2c0-3.87 3.13-7 7-7s7 3.13 7 7v2h-4v8h3c1.66 0 3-1.34 3-3v-7c0-4.97-4.03-9-9-9z" />
            </svg>
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-200">
              <a href="#">{{ episode.chapter.name }}</a>
            </div>
            <div class="my-3 ml-4 text-2xl font-semibold leading-7 text-gray-200">
              <a href="#">{{ episode.title }}</a>
            </div>
          </div>
          <div class="mt-2 text-sm text-gray-200">{{ episode.short_description }}</div>
          <div class="inline-block">
            <a href="https://laracasts.com">
              <div class="flex mt-3 text-sm font-semibold text-gray-200 hover:underline">
                <div class="text-lg">Listen Now</div>

                <div class="ml-1 text-gray-200">
                  <svg viewBox="0 0 20 20" fill="currentColor" class="inline w-4 h-4">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
            </a>
          </div>
          <div class="flex justify-center my-auto mt-3">
            <inertia-link :href="route('apple-player')">
              <div class="p-2 my-auto mt-3 text-sm font-semibold text-gray-200">
                <div class="ml-1 text-gray-200">
                  <svg id="apple" viewBox="0 0 170 170" class="w-10 h-10">
                    <title>Apple Logo</title>
                    <path
                      d="M150.37 130.25c-2.45 5.66-5.35 10.87-8.71 15.66-4.58 6.53-8.33 11.05-11.22 13.56-4.48 4.12-9.28 6.23-14.42 6.35-3.69 0-8.14-1.05-13.32-3.18-5.197-2.12-9.973-3.17-14.34-3.17-4.58 0-9.492 1.05-14.746 3.17-5.262 2.13-9.501 3.24-12.742 3.35-4.929.21-9.842-1.96-14.746-6.52-3.13-2.73-7.045-7.41-11.735-14.04-5.032-7.08-9.169-15.29-12.41-24.65-3.471-10.11-5.211-19.9-5.211-29.378 0-10.857 2.346-20.221 7.045-28.068 3.693-6.303 8.606-11.275 14.755-14.925s12.793-5.51 19.948-5.629c3.915 0 9.049 1.211 15.429 3.591 6.362 2.388 10.447 3.599 12.238 3.599 1.339 0 5.877-1.416 13.57-4.239 7.275-2.618 13.415-3.702 18.445-3.275 13.63 1.1 23.87 6.473 30.68 16.153-12.19 7.386-18.22 17.731-18.1 31.002.11 10.337 3.86 18.939 11.23 25.769 3.34 3.17 7.07 5.62 11.22 7.36-.9 2.61-1.85 5.11-2.86 7.51zM119.11 7.24c0 8.102-2.96 15.667-8.86 22.669-7.12 8.324-15.732 13.134-25.071 12.375a25.222 25.222 0 0 1-.188-3.07c0-7.778 3.386-16.102 9.399-22.908 3.002-3.446 6.82-6.311 11.45-8.597
                    4.62-2.252 8.99-3.497 13.1-3.71.12 1.083.17 2.166.17 3.24z"
                      stroke-linecap="round"
                      stroke-miterlimit="10"
                      stroke-width="5"
                      stroke-linejoin="round"
                    />
                  </svg>
                </div>
              </div>
            </inertia-link>
            <inertia-link :href="route('spotify-player')">
              <div class="p-2 my-auto mt-3 text-sm font-semibold text-gray-200">
                <div class="ml-1 text-gray-500">
                  <svg id="spotify" viewBox="0 0 167.5 167.5" class="w-10 h-10">
                    <title>Spotify Logo</title>
                    <path stroke-linecap="round" stroke-miterlimit="10" stroke-width="5" stroke-linejoin="round" d="M83.7 0C37.5 0 0 37.5 0 83.7c0 46.3 37.5 83.7 83.7 83.7 46.3 0 83.7-37.5 83.7-83.7S130 0 83.7 0zM122 120.8c-1.4 2.5-4.6 3.2-7 1.7-19.8-12-44.5-14.7-73.7-8-2.8.5-5.6-1.2-6.2-4-.2-2.8 1.5-5.6 4-6.2 32-7.3 59.6-4.2 81.6 9.3 2.6 1.5 3.4 4.7 1.8 7.2zM132.5 98c-2 3-6 4-9 2.2-22.5-14-56.8-18-83.4-9.8-3.2 1-7-1-8-4.3s1-7 4.6-8c30.4-9 68.2-4.5 94 11 3 2 4 6 2 9zm1-23.8c-27-16-71.6-17.5-97.4-9.7-4 1.3-8.2-1-9.5-5.2-1.3-4 1-8.5 5.2-9.8 29.6-9 78.8-7.2 109.8 11.2 3.7 2.2 5 7 2.7 10.7-2 3.8-7 5-10.6 2.8z"></path>
                  </svg>
                </div>
              </div>
            </inertia-link>
            <a href="https://laracasts.com">
              <div class="p-2 my-auto mt-3 text-sm font-semibold text-gray-200">
                <div class="ml-1 text-gray-500">
                  <svg id="youtube" viewBox="0 0 64 64" class="w-10 h-10">
                    <title>Youtube Logo</title>
                    <path data-name="layer1" d="M49.539 12H14.461A12.4 12.4 0 0 0 2 24.327v17.346A12.4 12.4 0 0 0 14.461 54h35.078A12.4 12.4 0 0 0 62 41.673V24.327A12.4 12.4 0 0 0 49.539 12z" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke-linejoin="round"></path>
                    <path data-name="layer2" d="M41.111 33.844L24.7 41.585a.658.658 0 0 1-.938-.585V25.031a.659.659 0 0 1 .956-.581l16.407 8.225a.649.649 0 0 1-.014 1.169z" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke-linejoin="round"></path>
                  </svg>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Column 2 -->
  </div>
</template>

<script>
import JetApplicationLogo from "@/Jetstream/ApplicationLogo"
import axios from "axios"

export default {
  components: {
    JetApplicationLogo,
  },
  data() {
    return {
      episodes: [],
      chapters: [],
    }
  },

  async created() {
    const episodes = await axios.get("/list/episodes")
    this.episodes = episodes.data
  },
}
</script>

<style>
svg {
  max-height: 100vh;
  max-width: 100vw;
}
#apple {
  stroke: black;
  fill: none;
}
#apple:hover {
  fill: #0071cd;
}
#spotify {
  stroke: black;
  fill: none;
}
#spotify:hover {
  fill: #0e9c62;
}
#youtube {
  stroke: black;
  fill: none;
}
#youtube:hover {
  fill: #d00027;
}
</style>