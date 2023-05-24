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

    <div class="grid grid-cols-4 gap-3 min-h-screen">
        <div class="p-2 flex flex-col gap-2 bg-gray-600">
            <div class="p-2 w-full h-16 rounded-sm text-black drop-shadow-lg bg-orange-500">
                card
            </div>
            <div class="p-2 w-full h-16 rounded-sm text-black drop-shadow-lg bg-orange-500">
                card
            </div>
            <div class="p-2 w-full h-16 rounded-sm text-black drop-shadow-lg bg-orange-500">
                card
            </div>
            <div class="p-2 w-full h-16 rounded-sm text-black drop-shadow-lg bg-orange-500">
                card
            </div>
        </div>

        <div class="bg-gray-600">
            
        </div>

        <div class="bg-gray-600">
            
        </div>

        <div class="bg-gray-600">
            
        </div>        
    </div>
</template>
