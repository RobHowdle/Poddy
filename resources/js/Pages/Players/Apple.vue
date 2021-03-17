<template>
    <app-layout>
        <template #header>
            <h2 class="p-3 text-xl font-semibold text-center text-white bg-black font-rakkas">
                Apple Podcasts
            </h2>
        </template>

        <div class="py-12">
            <div class="p-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <iframe src="https://embed.podcasts.apple.com/us/podcast/uk-ghost-stories/id1448060465?itsct=podcast_box&amp;itscg=30200&amp;theme=dark" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="autoplay *; encrypted-media *;" style="width: 100%; overflow: hidden; border-radius: 10px; background: transparent none repeat scroll 0% 0%;" height="450px" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
    }
</script>

<style lang="scss" scoped>

</style>            
