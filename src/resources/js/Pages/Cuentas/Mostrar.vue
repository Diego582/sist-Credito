<template>
  <app-layout title="cuentas">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Mostrar Cuentas
      </h2>
    </template>
    <div class="container py-4">
      <Link
        :href="route('cuentas.create')"
        class="
          h-10
          px-6
          font-semibold
          rounded-md
          bg-blue-700
          hover:bg-green-600
          text-white
        "
      >
        Nuevo
      </Link>
    </div>
    <div class="container">
      <table
        class="table w-full border-separate lg:border-collapse table-fixed"
      >
        <thead>
          <tr>
            <th class="w-1/5">Banco</th>
            <th class="w-1/5">Cbu</th>
            <th class="w-1/5">Alias</th>
            <th class="w-2/5">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="cuenta in cuentas" :key="cuenta.id">
            <td>
              {{ cuenta.banco }}
            </td>
            <td>
              {{ cuenta.cbu }}
            </td>
            <td>
              {{ cuenta.alias }}
            </td>
            <td>
              <button>
                <Link
                  :href="route('cuentas.edit', cuenta.id)"
                  class="
                    h-10
                    px-6
                    font-semibold
                    rounded-md
                    bg-blue-700
                    hover:bg-green-600
                    text-white
                  "
                >
                  Editar
                </Link>
              </button>
              <button>
                <Link
                  method="delete"
                  :href="route('cuentas.destroy', cuenta.id)"
                  class="
                    h-10
                    px-6
                    font-semibold
                    rounded-md
                    bg-blue-700
                    hover:bg-red-700
                    text-white
                  "
                  v-on:click.prevent="deleteRegistro()"
                >
                  Eliminar
                </Link>
              </button>
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
import { Head, Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  props: ["cuentas"],
  components: {
    AppLayout,
    Head,
    Link,
  },
  methods: {
    deleteRegistro: function () {
      alert("eliminar");
    },
  },
});
</script>
