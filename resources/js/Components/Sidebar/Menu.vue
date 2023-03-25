<template>
    <li class="my-4" @click="toggleSubmenu($event.currentTarget)">        
        <div class="flex flex-row whitespace-nowrap py-1 cursor-pointer">
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

    const isOpen = ref(true)

    const toggleSubmenu = function(elemento) {
        let classes = ['transition-all', 'duration-500', 'bg-purple-800', 'rounded-sm']
        classes.forEach(classe => {
            elemento.firstChild.classList.toggle(classe)
        })
        let submenu = elemento.querySelector('.submenu')
        submenu.classList.toggle('exibir')
    }
    defineProps({
        nomeMenu: String,
        classeDinamica: String,
        icone: String,
        toggle: Function
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