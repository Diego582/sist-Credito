<template>
    <app-layout title="users">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Users
            </h2>
        </template>

        <div class="">
            <div class="">
                <div class="container">
                    <div v-for="user in users" :key="user.id">
                        {{ user.name }}
                    </div>
                </div>
                <div class="container grid grid-cols1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-blue-200 col-span-2">A</div>
                    <div class="bg-blue-300">B</div>
                    <div class="bg-blue-400">C</div>
                    <div class="bg-blue-500">D</div>
                    <div class="bg-blue-600">E</div>
                    <div class="bg-blue-700">F</div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

export default defineComponent({
    props: ["users"],
    components: {
        AppLayout,
    },
});
</script>
<style></style>
