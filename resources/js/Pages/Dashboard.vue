<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';    
    import { ref } from 'vue';
    import draggable from 'vuedraggable';

    const meals = ref([
        'Hamburger',
        'Pizza',
        'Spaghetti',
        'Tacos',
        'Teriyaki Chicken',
    ]);

    const yuckyMeals = ref([
        'Bat wing soup',
        'Spicy Octopus',
        'Anything from Taco Bell',
    ]);

    const itemKey = (item, index) => {
        if (item !== undefined) {
            return item.toString();
        }
        return index.toString();
    };

    const drag = () => {
        // event.currentTarget.style.display = 'none'
    }
    
</script>

<script>
    export default {
        layout: AuthenticatedLayout,
        components: {
            draggable
        }        
    }
</script>

<template>
    <Head title="Dashboard" />

    <div class="grid grid-cols-4 gap-3 min-h-screen">

        <div class="bg-gray-100 p-2">
            <draggable v-model="yuckyMeals" tag="ul" group="meals" :item-key="itemKey" :animation="300">
                <template #item="{ element: meal }">
                    <div class="bg-orange-500 mb-3 p-2 rounded-sm drop-shadow-lg">
                        <li>{{ meal }}</li>
                    </div>
                </template>
            </draggable>
        </div>

        <div class="bg-gray-100 p-2">
            <draggable v-model="meals" tag="ul" group="meals" :item-key="itemKey" :animation="300">
                <template #item="{ element: meal }">
                    <div class="bg-orange-500 mb-3 p-2 rounded-sm drop-shadow-lg">
                        <li>{{ meal }}</li>
                    </div>
                </template>
            </draggable>
        </div>


        <!-- <div class="p-2 flex flex-col gap-2 bg-gray-600">
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
            
        </div>         -->
    </div>
</template>
