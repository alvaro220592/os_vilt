<template>
    <!-- <div v-if="show" class="h-screen fixed top-0 w-full bg-black/25 backdrop-blur"></div> -->

    <aside 
        class="fixed bg-teal-600  text-white h-screen top-0 transition-all duration-500 p-6"
        :class="show ? 'left-0' : '-left-full'"
    >
        <span @click="$emit('close')" class="cursor-pointer w-full">
            Fechar
        </span>

        <slot></slot>
    </aside>

</template>

<script setup>
    defineProps({
        show: Boolean
    })

    defineEmits([
        'close'
    ])

</script>

<style scoped>
    /* .navbar_sidebar_expanded {
        width: 10px;
    } */
</style>