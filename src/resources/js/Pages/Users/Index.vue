<template>
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

