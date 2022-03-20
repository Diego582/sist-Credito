<template>
    <app-layout title="beneficiarios">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Mostrar Beneficiarios
            </h2>
        </template>
        <div class="container py-4">
            <Link
                :href="route('beneficiarios.create')"
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
                        <th class="w-1/6">Documento</th>
                        <th class="w-1/6">Nombre</th>
                        <th class="w-1/6">Apellido</th>
                        <th class="w-1/6">Cuil</th>
                        <th class="w-2/6">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="beneficiario in beneficiarios"
                        :key="beneficiario.id"
                    >
                        <td>
                            {{ beneficiario.dni }}
                        </td>
                        <td>
                            {{ beneficiario.name }}
                        </td>
                        <td>
                            {{ beneficiario.apellido }}
                        </td>
                        <td>
                            {{ beneficiario.cuil }}
                        </td>
                        <td>
                            <button>
                                <Link
                                    :href="
                                        route(
                                            'beneficiarios.edit',
                                            beneficiario.id
                                        )
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
                                            'beneficiarios.destroy',
                                            beneficiario.id
                                        )
                                    "
                                    class="h-10 px-6 font-semibold rounded-md bg-blue-700 hover:bg-red-700 text-white"
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
    props: ["beneficiarios"],
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
