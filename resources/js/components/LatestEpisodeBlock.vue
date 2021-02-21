<template>
    <div>
        <h1 class="text-5xl text-white">I am the latest episode</h1>
        <p>{{ $title }}</p>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                props: ['id', 'title', 'chapter', 'author'],
                episodes: [
                    {
                        id: 1,
                        title: 'Episode 1 - Something Scary',
                        chapter: 'Cumbria Chapter',
                        author: 'Flex'
                    }
                ]
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>