<template>
    <div class="flex flex-row min-h-screen overflow-y-auto">
        <aside :class="{'w-12': !isOpen, 'w-64 sm:relative fixed': isOpen}" class="bg-gray-800 text-white min-h-screen top-0 xs:fixed left-0 z-30 transition-all duration-500">
            
            <!-- <div class="flex items-center justify-between px-4 py-3 h-16 border-b border-gray-700"> -->
                <!-- <button class="text-gray-500 m-auto hover:text-white focus:outline-none" @click="toggleSidebar">
                    <font-awesome-icon icon="fa-solid fa-bars" />        
                </button> -->
                <!-- <div class="flex flex-row whitespace-nowrap py-1 cursor-pointer hover:bg-purple-800 transition-all duration-200 rounded-sm">
                    <span class="ml-2 mr-4"><font-awesome-icon icon="fa-solid fa-feather" /></span>
                    <span class="transition ease-in-out delay-150" :class="!isOpen ? 'opacity-0' : ''">Nome Marca</span>
                </div>
            </div> -->
            
                <div class="flex flex-row whitespace-nowrap py-1 cursor-pointer hover:bg-purple-800 transition-all duration-200 rounded-sm">
                    <span class="ml-2 mr-4"><font-awesome-icon icon="fa-solid fa-feather" /></span>
                    <span class="transition ease-in-out delay-150" :class="!isOpen ? 'opacity-0' : ''">Nome Marca</span>
                </div>
                
            
            <div class="px-2 pt-2 pb-4 menus">
                <ul class="mt-10">
                    <Menu nomeMenu="Cadastros" icone="fa-solid fa-plus" :classeDinamica="!isOpen ? 'opacity-0' : ''" :expande="true" @click="!isOpen ? isOpen = true : ''">
                        <Submenu nomeSubmenu="cad1" :url="route('dashboard')" class="transition ease-in-out delay-150" :class="{'hidden' : !isOpen}" />
                        <Submenu nomeSubmenu="cad2" :url="route('dashboard')" class="transition ease-in-out delay-150" :class="{'hidden' : !isOpen}" />
                        <Submenu nomeSubmenu="cad3" :url="route('dashboard')" class="transition ease-in-out delay-150" :class="{'hidden' : !isOpen}" />
                    </Menu>

                    <Menu nomeMenu="Configurações" icone="fa-solid fa-gear" :classeDinamica="!isOpen ? 'opacity-0' : ''" :expande="true" @click="!isOpen ? isOpen = true : ''">
                        <Submenu nomeSubmenu="cfg1" :url="route('dashboard')" class="transition ease-in-out delay-150" :class="{'hidden' : !isOpen}" />
                        <Submenu nomeSubmenu="cfg2" :url="route('dashboard')" class="transition ease-in-out delay-150" :class="{'hidden' : !isOpen}" />
                        <Submenu nomeSubmenu="cfg3" :url="route('dashboard')" class="transition ease-in-out delay-150" :class="{'hidden' : !isOpen}" />
                    </Menu>

                    <Menu nomeMenu="Sair" icone="fa-solid fa-power-off" :classeDinamica="!isOpen ? 'opacity-0' : ''" :expande="false">
                    </Menu>
                </ul>
            </div>
        </aside>
        <main class="w-full bg-orange-500">
            <div class="h-16 bg-gray-800 w-full px-4 flex items-center">
                <button class="text-gray-500 hover:text-white focus:outline-none" @click="toggleSidebar">
                    <font-awesome-icon icon="fa-solid fa-bars" />        
                </button>
            </div>

            <div class="p-2">
                <div class="bg-gray-800 rounded-sm p-4 text-white">
                    <h1 class="text-2xl font-bold mb-4">Bem-vindo!</h1>
                </div>
            </div>
        </main>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import Menu from '@/Components/Sidebar/Menu.vue'
import Submenu from '@/Components/Sidebar/Submenu.vue'

const isOpen = ref(true)

const toggleSidebar = function () {
    // Este é o toggle para exibir/ocultar
    isOpen.value = !isOpen.value

    // Animações ao clicar nos menus para abrir os submenus
    const classesEstiloMenus = ['transition-all', 'duration-500', 'bg-purple-800', 'rounded-sm']

    // Quando o toggle é para ocultar
    if (isOpen.value == false) {

        // Removendo as classes de estilização usadas ao abrir os submenus ao clicar em algum menu. Essas classes são inseridas no primeiro elemento filho do elemento com classe 'menu' para que os submenus não fiquem estilizados também ao abrirem
        let menus = document.querySelectorAll('.menu')
        menus.forEach(menu => {
            classesEstiloMenus.forEach(classe => {
                if (menu.firstChild.classList.contains(classe)) {
                    menu.firstChild.classList.remove(classe)
                }
            })
        })

        // Removendo dos submenus a classe 'exibir', adquirida na função 'toggleSubmenu' ao abrir o submenu do compomente Menu
        let submenus = document.querySelectorAll('.submenu')
        submenus.forEach(submenu => {
            submenu.classList.remove('exibir')
        })
    }
}

</script>

<style>
.submenu {
    opacity: 0;
    transition: .5s;
    max-height: 0px;
    overflow: hidden;
}
.exibir {
    opacity: 1;
    transition: .5s;
    max-height: 100vh;
}
</style>
