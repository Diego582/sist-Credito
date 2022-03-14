<template>
    <app-layout title="users">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Expedientes
            </h2>
        </template>

        <div class="container">
            <table
                class="table w-full border-separate lg:border-collapse table-fixed"
            >
                <thead>
                    <tr>
                        <th class="w-1/4">Nombre Usuario</th>
                        <th class="w-1/4">Correo Electronico</th>
                        <th class="w-1/2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="user in users" :key="user.id">
                        <td>
                            {{ user.name }}
                        </td>
                        <td>
                            {{ user.email }}
                        </td>
                        <td>
                            <button
                                class="h-10 px-6 font-semibold rounded-md bg-blue-700 hover:bg-green-600 text-white"
                                type="submit"
                            >
                                Actualizar
                            </button>
                            <button
                                class="h-10 px-6 font-semibold rounded-md bg-blue-700 hover:bg-red-600 text-white"
                                type="submit"
                            >
                                Eliminar
                            </button>
                            <Button />
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
