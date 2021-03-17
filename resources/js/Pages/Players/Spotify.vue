<template>
    <app-layout>
        <template #header>
            <h2 class="p-3 text-xl font-semibold text-center text-white bg-black font-rakkas">
                Spotify
            </h2>
        </template>

        <div class="py-12">
            <div class="p-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <iframe src="https://open.spotify.com/embed-podcast/show/2HJQJPuvaUUbMOPB98G2Ys" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>                
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>            
