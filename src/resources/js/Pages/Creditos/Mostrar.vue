<template>
  <app-layout title="creditos">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Mostrar Creditos
      </h2>
    </template>
    <div class="container py-4">
      <Link
        :href="route('creditos.create')"
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
            <th class="w-1/5">Linea</th>
            <th class="w-1/5">Monto</th>
            <th class="w-1/5">Detalle</th>
            <th class="w-2/5">Fecha de Entrega</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="credito in creditos" :key="credito.id">
            <td>
              {{ credito.banco }}
            </td>
            <td>
              {{ credito.cbu }}
            </td>
            <td>
              {{ credito.alias }}
            </td>
            <td>
              <button>
                <Link
                  :href="route('creditos.edit', credito.id)"
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
                  :href="route('creditos.destroy', credito.id)"
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
  props: ["creditos"],
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
