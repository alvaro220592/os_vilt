<template>
  <aside
    :class="{'w-12': !isOpen, 'w-64': isOpen}"
    class="bg-gray-800 text-white h-screen fixed top-0 left-0 z-30 transition-all duration-500"
  >
    <div class="flex items-center justify-between px-4 py-3 border-b border-gray-700">
        <button class="text-gray-500 hover:text-white focus:outline-none" @click="isOpen = !isOpen">
            <font-awesome-icon icon="fa-solid fa-bars" />        
        </button>
    </div>
    
    <div class="px-2 pt-2 pb-4 menus">
        <ul class="mt-10">
            <li class="my-4 cursor-pointer">
                <div @click="toggleSubmenu($event.currentTarget)">
                    <div class="flex flex-row whitespace-nowrap py-1">
                        <span class="ml-2 mr-4"><font-awesome-icon icon="fa-solid fa-plus" /></span>
                        <span class="transition ease-in-out delay-150" :class="{'opacity-0' : !isOpen}">Cadastros</span>
                    </div>
                    <div class="submenu ml-5" :class="{'hidden' : !isOpen}">
                        <ul class="mt-3">
                            <li>
                                <font-awesome-icon icon="fa-solid fa-chevron-right" class="mr-2" />
                                submenu
                            </li>
                            <li>
                                <font-awesome-icon icon="fa-solid fa-chevron-right" class="mr-2" />
                                submenu
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="my-4 cursor-pointer">
                <div @click="toggleSubmenu($event.currentTarget)">
                    <div class="flex flex-row whitespace-nowrap py-1">
                        <span class="ml-2 mr-4"><font-awesome-icon icon="fa-solid fa-gear" /></span>
                        <span class="transition ease-in-out delay-150" :class="{'opacity-0' : !isOpen}">Configurações</span>
                    </div>
                    
                    <div class="submenu ml-5" :class="{'hidden' : !isOpen}">
                        <ul class="mt-3">
                            <li>
                                <font-awesome-icon icon="fa-solid fa-chevron-right" class="mr-2" />
                                submenu
                            </li>
                            <li>
                                <font-awesome-icon icon="fa-solid fa-chevron-right" class="mr-2" />
                                submenu
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="my-4 cursor-pointer">
                <div class="flex flex-row py-1">
                    <span class="ml-2 mr-4"><font-awesome-icon icon="fa-solid fa-power-off" /></span>
                    <span class="transition ease-in-out delay-150" :class="{'opacity-0' : !isOpen}">Sair</span>
                </div>
            </li>

            <Menu nomeMenu="TESTE" icone="fa-solid fa-gear" :classeDinamica="!isOpen ? 'opacity-0' : ''">
                <Submenu nomeSubmenu="sub1" :url="route('dashboard')" class="transition ease-in-out delay-150" :class="{'opacity-0' : !isOpen}" />
                <Submenu nomeSubmenu="sub2" :url="route('dashboard')" class="transition ease-in-out delay-150" :class="{'opacity-0' : !isOpen}" />
                <Submenu nomeSubmenu="sub3" :url="route('dashboard')" class="transition ease-in-out delay-150" :class="{'opacity-0' : !isOpen}" />
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

// Esta função foi comentada porque está sendo implantado o menu por componentes e o objetivo é vir de la
// const toggleSubmenu = function(elemento) {
//     let classes = ['transition-all', 'duration-500', 'bg-purple-800', 'rounded-sm']
//     classes.forEach(classe => {
//         elemento.firstChild.classList.toggle(classe)
//     })
//     let submenu = elemento.querySelector('.submenu')
//     submenu.classList.toggle('exibir')
// }

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
