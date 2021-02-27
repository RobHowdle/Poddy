<template>
    <div>
        <div class="p-10">
            <div class="mb-5 title">
                <h1 class="text-2xl text-center text-white">Latest Episode</h1> 
                <p class="text-center text-white">
                   {{ episodeText }} </p>
            </div>
            <!--Card 1-->
            <div class="max-w-sm mx-auto overflow-hidden border rounded border-grey-500">
                <img class="w-full" src="https://www.ukghoststories.co.uk/images/ukgs_cumbria.png" alt="Mountain">
                <div class="px-6 py-4 text-center">
                    <div class="mb-2 text-lg font-bold text-gray-500 underline">{{episodeChapter}}</div>
                    <p class="text-2xl text-gray-200">
                        {{episodeTitle}}
                    </p>
                    <div class="mt-3 text-sm italic text-gray-300">{{ episodeShort }}</div>
                </div>
                <div class="px-6 pt-4 pb-2 text-center">
                    <button class="px-4 mb-5 text-white bg-green-600 rounded-full">Listen Now</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["episodeTitle", "episodeChapter", "episodeShort"]
    };
</script>

<style lang="scss" scoped>

</style>