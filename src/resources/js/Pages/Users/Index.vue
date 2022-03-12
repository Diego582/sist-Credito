<template>
<<<<<<< HEAD
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
=======
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Users</h2>
    </template>

    <div class="conteiner py-12">
      <table class="table-auto w-full">
        <thead>
          <tr class="bg-primary text-center">
            <th class="">Nombre</th>
            <th class="">Correo Electronico</th>
            <th class="">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users" :key="user.id">
            <td
              class="
                text-center text-dark
                font-medium
                text-base
                py-5
                px-2
                bg-white
                border-b border-[#E8E8E8]
              "
            >
              {{ user.name }}
            </td>
            <td
              class="
                text-center text-dark
                font-medium
                text-base
                py-5
                px-2
                bg-white
                border-b border-[#E8E8E8]
              "
            >
              {{ user.email }}
            </td>

            <td
              class="
                text-center text-dark
                font-medium
                text-base
                py-5
                px-2
                bg-white
                border-b border-r border-[#E8E8E8]
              "
            >
              <a
                href=""
                class="
                  border border-primary
                  py-2
                  px-6
                  text-primary
                  inline-block
                  rounded
                  hover:bg-primary hover:text-white
                "
              >
                Actualizar
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </app-layout>
>>>>>>> f8cabf533d5bc94a4b1435f5cb218b65cad01992
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
<<<<<<< HEAD
<style></style>
=======

>>>>>>> f8cabf533d5bc94a4b1435f5cb218b65cad01992
