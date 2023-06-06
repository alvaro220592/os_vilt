<!-- <Link :href="url" class="flex flex-row py-1 px-2 rounded-sm transition-all duration-200 hover:bg-gray-700"> -->
<template>
        <li v-on:mouseover="iniciarAnimacaoIcone($event.currentTarget)" v-on:mouseout="pararAnimacaoIcone($event.currentTarget)">
            <Link :href="url" class="flex flex-row py-1 px-2 rounded-lg transition-all duration-200">
                <span>
                    <font-awesome-icon icon="fa-solid fa-circle" class="mr-4 my-0.5 text-orange-500 text-[8px] transition-all duration-500 opacity-0" />
                </span>
                <span>
                    {{ nomeSubmenu }}
                </span>
            </Link>
        </li>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3'

    defineProps({
        nomeSubmenu: String,
        url: String
    })

    const iniciarAnimacaoIcone = function (el) {
        let icone = el.firstChild.querySelector('span > svg')
        if (icone.classList.contains('opacity-0')) {
            icone.classList.remove('opacity-0')
        }
    }
    const pararAnimacaoIcone = function (el) {
        let icone = el.firstChild.querySelector('span > svg')
        if (!icone.classList.contains('opacity-0')) {
            icone.classList.add('opacity-0')
        }
    }
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