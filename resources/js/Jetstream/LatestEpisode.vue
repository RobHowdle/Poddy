<template>
    <div class="text-center">
        <div class="p-6 bg-black border-b border-red-500 sm:px-20">
            <div>
                <jet-application-logo class="block w-auto h-12 mx-auto" />
            </div>
            <div class="mt-8 text-5xl text-white font-rakkas">
                Latest Episode
            </div>
        </div>

        <div class="grid grid-flow-col grid-cols-2 gap-4 pt-4 bg-black" v-for="episode in episodes" :key="episode.id">
            <div class="flex justify-center p-6">
                <img v-bind:src=episode.chapter.logo_path alt="Chapter Logo" class="w-70 h-80">
            </div>

        <div class="my-auto bg-gray-200 bg-opacity-25 border border-gray-200" v-for="episode in episodes" :key="episode.id">
            <div class="p-6">
                <div>
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 mx-auto text-gray-400">
                        <path d="M12 1c-4.97 0-9 4.03-9 9v7c0 1.66 1.34 3 3 3h3v-8H5v-2c0-3.87 3.13-7 7-7s7 3.13 7 7v2h-4v8h3c1.66 0 3-1.34 3-3v-7c0-4.97-4.03-9-9-9z"/></svg>
                    <div class="ml-4 text-lg font-semibold leading-7 text-gray-200">
                        <a href="#">{{ episode.chapter.name }}</a>
                    </div>
                    <div class="my-3 ml-4 text-2xl font-semibold leading-7 text-gray-200">
                        <a href="#">{{ episode.title }}</a>
                    </div>
                </div>
                    <div class="mt-2 text-sm text-gray-200">
                        {{ episode.short_description }}\dis
                    </div>
                    <div class="inline-block">
                        <a href="https://laracasts.com">
                            <div class="flex mt-3 text-sm font-semibold text-gray-200">
                                <div class="text-lg">Listen Now </div>

                                <div class="ml-1 text-gray-200">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="inline w-4 h-4">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="flex justify-center mt-3">
                        <inertia-link :href="route('apple-player')">
                            <div class="p-2 my-auto mt-3 text-sm font-semibold text-gray-200">
                                <div class="ml-1 text-gray-200">
                            <svg viewBox="0 0 170 170" fill="currentColor" class="w-10 h-10">
                                <title>Apple Logo</title>
                                <path d="M150.37 130.25c-2.45 5.66-5.35 10.87-8.71 15.66-4.58 6.53-8.33 11.05-11.22 13.56-4.48 4.12-9.28 6.23-14.42 6.35-3.69 0-8.14-1.05-13.32-3.18-5.197-2.12-9.973-3.17-14.34-3.17-4.58 0-9.492 1.05-14.746 3.17-5.262 2.13-9.501 3.24-12.742 3.35-4.929.21-9.842-1.96-14.746-6.52-3.13-2.73-7.045-7.41-11.735-14.04-5.032-7.08-9.169-15.29-12.41-24.65-3.471-10.11-5.211-19.9-5.211-29.378 0-10.857 2.346-20.221 7.045-28.068 3.693-6.303 8.606-11.275 14.755-14.925s12.793-5.51 19.948-5.629c3.915 0 9.049 1.211 15.429 3.591 6.362 2.388 10.447 3.599 12.238 3.599 1.339 0 5.877-1.416 13.57-4.239 7.275-2.618 13.415-3.702 18.445-3.275 13.63 1.1 23.87 6.473 30.68 16.153-12.19 7.386-18.22 17.731-18.1 31.002.11 10.337 3.86 18.939 11.23 25.769 3.34 3.17 7.07 5.62 11.22 7.36-.9 2.61-1.85 5.11-2.86 7.51zM119.11 7.24c0 8.102-2.96 15.667-8.86 22.669-7.12 8.324-15.732 13.134-25.071 12.375a25.222 25.222 0 0 1-.188-3.07c0-7.778 3.386-16.102 9.399-22.908 3.002-3.446 6.82-6.311 11.45-8.597 4.62-2.252 8.99-3.497 13.1-3.71.12 1.083.17 2.166.17 3.24z"/>
                            </svg>
                                </div>
                            </div>
                        </inertia-link>
                        <inertia-link :href="route('spotify-player')">
                            <div class="p-2 my-auto mt-3 text-sm font-semibold text-gray-200">
                                <div class="ml-1 text-gray-500">
                                    <svg id="spotify" viewBox="0 0 167.5 167.5" fill="currentColor" class="w-10 h-10">
                                        <title>Spotify Logo</title>
                                        <path fill="currentColor" d="M83.7 0C37.5 0 0 37.5 0 83.7c0 46.3 37.5 83.7 83.7 83.7 46.3 0 83.7-37.5 83.7-83.7S130 0 83.7 0zM122 120.8c-1.4 2.5-4.6 3.2-7 1.7-19.8-12-44.5-14.7-73.7-8-2.8.5-5.6-1.2-6.2-4-.2-2.8 1.5-5.6 4-6.2 32-7.3 59.6-4.2 81.6 9.3 2.6 1.5 3.4 4.7 1.8 7.2zM132.5 98c-2 3-6 4-9 2.2-22.5-14-56.8-18-83.4-9.8-3.2 1-7-1-8-4.3s1-7 4.6-8c30.4-9 68.2-4.5 94 11 3 2 4 6 2 9zm1-23.8c-27-16-71.6-17.5-97.4-9.7-4 1.3-8.2-1-9.5-5.2-1.3-4 1-8.5 5.2-9.8 29.6-9 78.8-7.2 109.8 11.2 3.7 2.2 5 7 2.7 10.7-2 3.8-7 5-10.6 2.8z"></path>
                                    </svg>
                                </div>
                            </div>
                        </inertia-link>
                        <a href="https://laracasts.com">
                            <div class="p-2 my-auto mt-3 text-sm font-semibold text-gray-200">
                                <div class="ml-1 text-gray-500">
                                    <svg class="w-10 h-10" id="youtube" viewBox="0 0 24 24">
                                        <title>Youtube Logo</title>
                                        <path fill="currentColor" d="M4.652 0h1.44l.988 3.702.916-3.702h1.454l-1.665 5.505v3.757h-1.431v-3.757l-1.702-5.505zm6.594 2.373c-1.119 0-1.861.74-1.861 1.835v3.349c0 1.204.629 1.831 1.861 1.831 1.022 0 1.826-.683 1.826-1.831v-3.349c0-1.069-.797-1.835-1.826-1.835zm.531 5.127c0 .372-.19.646-.532.646-.351 0-.554-.287-.554-.646v-3.179c0-.374.172-.651.529-.651.39 0 .557.269.557.651v3.179zm4.729-5.07v5.186c-.155.194-.5.512-.747.512-.271 0-.338-.186-.338-.46v-5.238h-1.27v5.71c0 .675.206 1.22.887 1.22.384 0 .918-.2 1.468-.853v.754h1.27v-6.831h-1.27zm2.203 13.858c-.448 0-.541.315-.541.763v.659h1.069v-.66c.001-.44-.092-.762-.528-.762zm-4.703.04c-.084.043-.167.109-.25.198v4.055c.099.106.194.182.287.229.197.1.485.107.619-.067.07-.092.105-.241.105-.449v-3.359c0-.22-.043-.386-.129-.5-.147-.193-.42-.214-.632-.107zm4.827-5.195c-2.604-.177-11.066-.177-13.666 0-2.814.192-3.146 1.892-3.167 6.367.021 4.467.35 6.175 3.167 6.367 2.6.177 11.062.177 13.666 0 2.814-.192 3.146-1.893 3.167-6.367-.021-4.467-.35-6.175-3.167-6.367zm-12.324 10.686h-1.363v-7.54h-1.41v-1.28h4.182v1.28h-1.41v7.54zm4.846 0h-1.21v-.718c-.223.265-.455.467-.696.605-.652.374-1.547.365-1.547-.955v-5.438h1.209v4.988c0 .262.063.438.322.438.236 0 .564-.303.711-.487v-4.939h1.21v6.506zm4.657-1.348c0 .805-.301 1.431-1.106 1.431-.443 0-.812-.162-1.149-.583v.5h-1.221v-8.82h1.221v2.84c.273-.333.644-.608 1.076-.608.886 0 1.18.749 1.18 1.631v3.609zm4.471-1.752h-2.314v1.228c0 .488.042.91.528.91.511 0 .541-.344.541-.91v-.452h1.245v.489c0 1.253-.538 2.013-1.813 2.013-1.155 0-1.746-.842-1.746-2.013v-2.921c0-1.129.746-1.914 1.837-1.914 1.161 0 1.721.738 1.721 1.914v1.656z"/>
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
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo'
    import axios from 'axios'

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

        async created(){  
            const episodes = await axios.get('/list/episodes');
            this.episodes = episodes.data;
        }
    }
</script>

<style>
svg {
  max-height: 100vh;
  max-width: 100vw;
}
#spotify {
    color: #1DB954;
}

#youtube {
    color: #FF0000;
}
</style>