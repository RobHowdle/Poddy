<template>
    <div>
        <div class="p-10">  
            <!--Card 1-->
            <div class="max-w-sm overflow-hidden rounded shadow-lg">
            <img class="w-full" src="https://dummyimage.com/vga" alt="Mountain">
            <div class="px-6 py-4">
                <div class="mb-2 text-xl font-bold">Latest Episode</div>
                <p class="text-base text-gray-700">
                {{episodeText}}
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#photography</span>
                <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#travel</span>
                <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#winter</span>
            </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["episodeText"]
    };
</script>

<style lang="scss" scoped>

</style>