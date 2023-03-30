<template>
    <main :isOpen="isOpen" :class="isOpen ? 'w-[calc(100%-3rem)] md:w-[calc(100%-16rem)]' : 'w-[calc(100%-3rem)]'" class="ml-auto min-h-screen bg-orange-500 md:transition-all md:duration-500">
        <div class="h-16 bg-gray-800 w-full px-4 flex">
            <button class="text-gray-500 hover:text-white focus:outline-none" @click="toggleSidebar">
                <font-awesome-icon icon="fa-solid fa-bars" />
            </button>
        </div>

        <div class="p-2">
            <div class="bg-gray-800 rounded-sm p-4 text-white">
                <h1 class="text-2xl font-bold mb-4">Bem-vindo!</h1>
    
                <slot />
            </div>
        </div>
    </main>
</template>

<script setup>

defineProps({
    toggleSidebar: Function,
    isOpen: Boolean
})
</script>

<style lang="scss" scoped>

</style>