<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
</script>

<script>
    export default {
        layout: AuthenticatedLayout
    }
</script>

<template>
    <Head title="Dashboard" />

    <!-- <AuthenticatedLayout> -->
        <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
        </template> -->
        <h1 class="text-2xl mb-4">Dashboard</h1>
        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam quidem doloribus deserunt nulla veritatis nostrum et animi nam velit? Minima reiciendis facilis necessitatibus ut natus amet, dolorem repellat consequatur tempore.</p>
        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam quidem doloribus deserunt nulla veritatis nostrum et animi nam velit? Minima reiciendis facilis necessitatibus ut natus amet, dolorem repellat consequatur tempore.</p>
        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam quidem doloribus deserunt nulla veritatis nostrum et animi nam velit? Minima reiciendis facilis necessitatibus ut natus amet, dolorem repellat consequatur tempore.</p>
    <!-- </AuthenticatedLayout> -->
</template>
