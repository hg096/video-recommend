<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
</script>

<template>
    <Head title="my-recommend" />

    <AuthenticatedLayout>

      <div class="w-auto bg-white rounded-lg p-4 mt-6 mx-4 shadow-md ">

        <div class="flex justify-between items-center ">
          <h1>
            나의 추천
          </h1>

          <Link class="bg-slate-800 py-1 px-2 text-white rounded" :href="route('MyRecommend.add')" >+</Link>
        </div>


      </div>



    </AuthenticatedLayout>
</template>
