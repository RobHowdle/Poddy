<template>
  <app-layout>
    <div>
      <main class="flex flex-col flex-1 md:p-0 lg:pt-8 lg:px-8 md:ml-24">
        <section class="p-4 shadow bg-cream-lighter">
          <div class="md:flex">
            <h2 class="mb-6 text-sm tracking-wide uppercase md:w-1/3 sm:text-lg">Create New Chapter</h2>
          </div>
          <form @submit.prevent="store" enctype="multipart/form-data" id="newChapter" name="newChapter">
            <div class="mb-8 md:flex">
              <div class="md:w-1/3">
                <legend class="text-sm tracking-wide uppercase">Chapter Name</legend>
                <p class="text-xs font-light text-red">This should be unique to the location of the host.</p>
              </div>
              <div class="mt-2 md:flex-1 mb:mt-0 md:px-3">
                <div class="mb-4">
                  <input class="w-full p-4 border-0 shadow-inner" type="text" id="name" v-model="form.name" :error="form.errors.name" placeholder="Death Star Chapter" />
                </div>
              </div>
            </div>

            <div class="mb-6 border border-b-0 md:flex border-t-1 border-x-0 border-cream-dark">
              <div class="px-3 text-center md:flex-1 md:text-right">
                <input type="hidden" name="sponsor" value="0" />
                <input class="button text-cream-lighter bg-brick hover:bg-brick-dark" type="submit" value="Create Chapter" />
              </div>
            </div>
          </form>
        </section>
      </main>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout.vue"
export default {
  components: { AppLayout },
}
</script>

<style lang="scss" scoped>
</style>