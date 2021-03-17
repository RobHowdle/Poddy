<template>
    <app-layout>
        <div class="py-12">
            <div class="mx-auto border border-white max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <latest-episode />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import LatestEpisode from '../Jetstream/LatestEpisode.vue'

    export default {
        components: {
            AppLayout,
            LatestEpisode

        },
    }
</script>
