<template>
    <div class="flex flex-row min-h-screen overflow-y-auto">
        <Sidebar :isOpen="isOpen" :toggleSidebar="toggleSidebar" />
        
        <Main :isOpen="isOpen" :toggleSidebar="toggleSidebar">
            <Erro></Erro>
            <Sucesso></Sucesso>
            <slot />
        </Main>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import Sidebar from '@/Components/Sidebar/Sidebar.vue'
import Main from '@/Components/Main/Main.vue'
import Erro from '@/Components/Flash/Erro.vue'
import Sucesso from '@/Components/Flash/Sucesso.vue'

const isOpen = ref(false)
const open = ref(true)

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

<style scoped>

</style>
