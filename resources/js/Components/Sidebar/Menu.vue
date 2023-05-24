<template>
    <li class="menu my-4" @click="toggleSubmenu($event.currentTarget)" :expande="expande" >
        <div class="flex flex-row whitespace-nowrap py-2 cursor-pointer hover:bg-purple-800 transition-all duration-200 rounded-sm">
            <span class="ml-2 mr-4"><font-awesome-icon :icon="icone" /></span>
            <span class="transition ease-in-out delay-150" :class="classeDinamica">{{ nomeMenu }}</span>
        </div>
        <div class="submenu ml-5">
            <ul class="mt-3">
                <slot /> <!-- Aqui virá o submenu -->
            </ul>
        </div>
    </li>
</template>

<script setup>

    import { ref } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3'
    import Menu from '@/Components/Sidebar/Menu.vue'

    const classesEstiloMenus = ['transition-all', 'duration-500', 'bg-purple-800', 'rounded-sm']

    const toggleSubmenu = function(elemento) {
        if (props.expande) {

            classesEstiloMenus.forEach(classe => {
                elemento.firstChild.classList.toggle(classe)
            })            

            let submenu = elemento.querySelector('.submenu')
            submenu.classList.toggle('exibir')
        }
    }
    
    const props = defineProps({
        nomeMenu: String,
        classeDinamica: String,
        icone: String,
        expande: Boolean
    })
</script>

<style scoped>

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