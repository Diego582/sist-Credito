<template>
    <app-layout title="cuentas">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Cargar Credito
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form @submit.prevent="submit" class="mb-6">
                        <div
                            class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7"
                        >
                            <div class="grid grid-cols-1">
                                <label
                                    class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
                                    >Linea</label
                                >
                                <input
                                    id="linea"
                                    v-model="form.linea"
                                    class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    type="text"
                                    placeholder="Linea"
                                />
                            </div>

                            <div class="grid grid-cols-1">
                                <label
                                    class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
                                    >Monto</label
                                >
                                <input
                                    id="monto"
                                    v-model="form.monto"
                                    class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    type="number"
                                    placeholder="Monto"
                                />
                            </div>
                            <div class="grid grid-cols-1">
                                <label
                                    class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
                                    >Detalle</label
                                >
                                <input
                                    id="detalle"
                                    v-model="form.detalle"
                                    class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    type="text"
                                    placeholder="detalle"
                                />
                            </div>
                            <div class="grid grid-cols-1">
                                <label
                                    class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
                                    >Fecha de Entrega</label
                                >
                                <input
                                    id="fecha_entrega"
                                    v-model="form.fecha_entrega"
                                    class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    type="date"
                                    placeholder="Fecha de Entrega"
                                />
                            </div>
                        </div>

                        <div
                            class="justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5 grid grid-cols-2"
                        >
                            <button>
                                <Link
                                    :href="route('beneficiarios.index')"
                                    class="w-auto bg-gray-500 hover:bg-red-400 rounded-lg shadow-xl font-medium text-white px-4 py-2"
                                    type="button"
                                >
                                    Cancelar
                                </Link>
                            </button>
                            <button
                                type="submit"
                                class="w-auto bg-blue-500 hover:bg-green-400 rounded-lg shadow-xl font-medium text-white px-4 py-2"
                            >
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <div class="container">
      <table
        class="table w-full border-separate lg:border-collapse table-fixed"
      >
        <thead>
          <tr>
            <th class="w-1/5">Nº Cuota</th>
            <th class="w-1/5">Capital</th>
            <th class="w-1/5">Interes</th>
            <th class="w-1/5">Saldo Capital</th>
            <th class="w-1/5">Vencimiento</th>
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
    props: { errors: Object },
    components: { AppLayout, Head, Link },
    data() {
        return {
            form: {
                linea: null,
                monto: null,
                detalle: null,
                fecha_entrega: null,
            },
        };
    },
    methods: {
        submit() {
            this.$inertia.post(route("cuentas.store"), this.form);
        },
    },
});
</script>
