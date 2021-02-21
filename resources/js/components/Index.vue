<template>
    <div>
        <h1 class="text-white">Here is the latest episode:</h1>
        <div v-for="episode in episodes" v-bind:key="episode.id">
            <latest-episode-block
                v-bind:id="episode.id"
                v-bind:title="episode.title"
                v-bind:chapter="episode.chapter"
                v-bind:author="episode.author"
            ></latest-episode-block>
        </div>
    </div>
</template>

<script>
    import LatestEpisodeBlock from '../components/LatestEpisodeBlock';

    export default {
        name: 'Index',
        components: {
            LatestEpisodeBlock
        }
    }
</script>
