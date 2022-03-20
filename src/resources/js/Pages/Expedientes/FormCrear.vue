<template>
    <app-layout title="expedientes">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Crear Expedientes
            </h2>
            <progress
                v-if="form.progress"
                :value="form.progress.percentage"
                max="100"
            >
                {{ form.progress.percentage }}%
            </progress>
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
                                    >Numero</label
                                >
                                <input
                                    id="numero"
                                    v-model="form.numero"
                                    class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    type="number"
                                    placeholder="Número"
                                />
                            </div>

                            <div class="grid grid-cols-1">
                                <label
                                    class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
                                    >Letras</label
                                >
                                <input
                                    id="letra"
                                    v-model="form.letra"
                                    class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    type="text"
                                    placeholder="Letras"
                                />
                            </div>
                            <div class="grid grid-cols-1">
                                <label
                                    class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
                                    >Año</label
                                >
                                <input
                                    id="anio"
                                    v-model="form.anio"
                                    class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    type="number"
                                    placeholder="Año"
                                />
                            </div>
                            <div class="grid grid-cols-1">
                                <label
                                    class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
                                    >Objeto</label
                                >
                                <input
                                    id="objeto"
                                    v-model="form.objeto"
                                    class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    type="text"
                                    placeholder="Objeto"
                                />
                            </div>
                            <div class="grid grid-cols-1">
                                <label
                                    class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
                                    >extracto</label
                                >
                                <input
                                    id="extracto"
                                    v-model="form.extracto"
                                    class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    type="text"
                                    placeholder="Extracto"
                                />
                            </div>
                            <div class="grid grid-cols-1">
                                <label
                                    class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
                                    >Estado</label
                                >
                                <input
                                    id="status"
                                    v-model="form.status"
                                    class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    type="number"
                                    placeholder="Estatus"
                                />
                            </div>
                        </div>

                        <div
                            class="justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5 grid grid-cols-2"
                        >
                            <button>
                                <Link
                                    :href="route('expedientes.index')"
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
                numero: null,
                letra: null,
                anio: null,
                objeto: null,
                extracto: null,
                status: null,
            },
        };
    },
    methods: {
        submit() {
            this.$inertia.post(route("expedientes.store"), this.form);
        },
    },
});
</script>
