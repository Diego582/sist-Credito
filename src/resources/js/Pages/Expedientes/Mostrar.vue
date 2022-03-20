<template>
    <app-layout title="expedientes">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Mostrar Expedientes
            </h2>
        </template>
        <div class="container py-4">
            <Link
                :href="route('expedientes.create')"
                class="h-10 px-6 font-semibold rounded-md bg-blue-700 hover:bg-green-600 text-white"
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
                        <th class="w-1/4">Expediente</th>
                        <th class="w-1/2">Objeto</th>
                        <th class="w-1/4">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="expediente in expedientes" :key="expediente.id">
                        <td>
                            {{ expediente.numero }}-{{ expediente.letra }}-{{
                                expediente.anio
                            }}
                        </td>
                        <td>
                            {{ expediente.objeto }}
                        </td>
                        <td>
                            <button>
                                <Link
                                    :href="
                                        route('expedientes.edit', expediente.id)
                                    "
                                    class="h-10 px-6 font-semibold rounded-md bg-blue-700 hover:bg-green-600 text-white"
                                >
                                    Editar
                                </Link>
                            </button>
                            <button>
                                <Link
                                    method="delete"
                                    :href="
                                        route(
                                            'expedientes.destroy',
                                            expediente.id
                                        )
                                    "
                                    class="h-10 px-6 font-semibold rounded-md bg-blue-700 hover:bg-red-700 text-white"
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
    props: ["expedientes"],
    components: {
        AppLayout,
        Head,
        Link,
    },
});
</script>
