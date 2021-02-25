<template>
    <div>
        <h1 class="text-white">Here is the latest episode:</h1>
        <LatestEpisodeBlock episode-text="Episode 1"></LatestEpisodeBlock>
        
    </div>
</template>

<script>
    import LatestEpisodeBlock from '../components/LatestEpisodeBlock';

export default {
    name: 'Index',
    components: {
        LatestEpisodeBlock
    }
};
</script>
