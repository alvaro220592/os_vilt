<template>
    <aside :open="isOpen" :class="{'w-12': !isOpen, 'w-48 sm:relative fixed': isOpen}" class="bg-gray-800 text-white min-h-screen top-0 xs:fixed left-0 z-30 transition-all duration-500">
        <div class="flex flex-row whitespace-nowrap px-1 py-4 text-2xl border-b border-gray-700 overflow-hidden">
            <span class="ml-2 mr-4"><font-awesome-icon icon="fa-solid fa-feather" /></span>
            <span class="transition ease-in-out delay-150" :class="!isOpen ? 'opacity-0' : ''">Marca Aqui</span>
            <font-awesome-icon icon="fa-solid fa-circle-chevron-left" class="right-0 ml-5 mt-1 text-3xl absolute overflow-x-visible text-orange-500 sm:hidden md:hidden" :class="{'hidden' : !isOpen}" @click="toggleSidebar" />
        </div>                
        
        <div class="px-2 pt-2 pb-4 menus overflow-hidden">
            <ul class="mt-10">
                <Link :href="route('dashboard')">
                    <Menu nomeMenu="Dashboard" title="Dashboard" icone="fa-solid fa-chart-simple" :classeDinamica="!isOpen ? 'opacity-0' : ''" :expande="false">
                    </Menu>
                </Link>
                
                <Menu nomeMenu="Cadastros" title="Cadastros" icone="fa-solid fa-plus" :classeDinamica="!isOpen ? 'opacity-0' : ''" :expande="true" @click="handleToggleSidebar">
                    <Submenu nomeSubmenu="Clientes" :url="route('clients.index')" class="transition ease-in-out delay-150" :class="{'hidden' : !isOpen}" />
                    <Submenu nomeSubmenu="cad2" :url="route('dashboard')" class="transition ease-in-out delay-150" :class="{'hidden' : !isOpen}" />
                    <Submenu nomeSubmenu="cad3" :url="route('dashboard')" class="transition ease-in-out delay-150" :class="{'hidden' : !isOpen}" />
                </Menu>

                <Menu nomeMenu="Configurações" title="Configurações" icone="fa-solid fa-gear" :classeDinamica="!isOpen ? 'opacity-0' : ''" :expande="true" @click="!isOpen ? isOpen = true : ''">
                    <Submenu nomeSubmenu="cfg1" :url="route('dashboard')" class="transition ease-in-out delay-150" :class="{'hidden' : !isOpen}" />
                    <Submenu nomeSubmenu="cfg2" :url="route('dashboard')" class="transition ease-in-out delay-150" :class="{'hidden' : !isOpen}" />
                    <Submenu nomeSubmenu="cfg3" :url="route('dashboard')" class="transition ease-in-out delay-150" :class="{'hidden' : !isOpen}" />
                </Menu>

                <Link :href="route('logout')" method="post" as="button" class="w-full">
                    <Menu nomeMenu="Sair" title="Sair" icone="fa-solid fa-power-off" :classeDinamica="!isOpen ? 'opacity-0' : ''" :expande="false">
                    </Menu>
                </Link>
            </ul>
        </div>
    </aside>
</template>

<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'
import Menu from '@/Components/Sidebar/Menu.vue'
import Submenu from '@/Components/Sidebar/Submenu.vue'

const props = defineProps({
    toggleSidebar: Function,
    isOpen: Boolean
})

const handleToggleSidebar = function () {
    if (!props.isOpen) {
        props.toggleSidebar()
    }
}

// const isOpen = ref(true)


</script>

<style scoped>
    aside {
        position: fixed;
    }
</style>