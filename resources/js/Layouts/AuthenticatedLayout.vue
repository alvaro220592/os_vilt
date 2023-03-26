<template>
  <aside
    :class="{'w-12': !isOpen, 'w-64': isOpen}"
    class="bg-gray-800 text-white h-screen fixed top-0 left-0 z-30 transition-all duration-500"
  >
    <div class="flex items-center justify-between px-4 py-3 border-b border-gray-700">
        <button class="text-gray-500 hover:text-white focus:outline-none" @click="toggleSidebar">
            <font-awesome-icon icon="fa-solid fa-bars" />        
        </button>
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
  <div class="ml-50 py-10 px-4 bg-purple-500">
    <h1 class="text-2xl font-bold mb-4">Bem-vindo!</h1>
    <p>Esta é uma pequena frase de exemplo para demonstrar o conteúdo principal da página. <span @click="teste()" id="a">a</span>&nbsp;&nbsp;&nbsp;<span id="b" @click="teste()">b</span></p>
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
