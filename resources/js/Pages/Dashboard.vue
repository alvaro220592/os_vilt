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

                    
                    <!-- <div class="flex flex-col p-2">
                        <div class="overflow-x-auto bg-white">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full"> -->
                    
                        <div class="overflow-x-auto bg-white scroll_div">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-x-auto">
                                    <table class="min-w-full">
                                        <thead class="border-b">
                                            <tr>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">aaaaaaaa</th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">aaaaaaaa</th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">aaaaaaaa</th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">aaaaaaaa</th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">aaaaaaaa</th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">aaaaaaaa</th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">aaaaaaaa</th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">aaaaaaaa</th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">aaaaaaaa</th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">aaaaaaaa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b">
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">bbbbbbbbb</td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">bbbbbbbbb</td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">bbbbbbbbb</td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">bbbbbbbbb</td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">bbbbbbbbb</td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">bbbbbbbbb</td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">bbbbbbbbb</td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">bbbbbbbbb</td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">bbbbbbbbb</td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">bbbbbbbbb</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
    <!-- </AuthenticatedLayout> -->
</template>
