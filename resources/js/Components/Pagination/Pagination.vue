<template>

    <div class="flex flex-row flex-nowrap justify-center items-center my-4">
        <Link 
            :href="links[0].url ? links[0].url : '#'" 
            v-html="prev_next(links[0].label, links[0].url)" 
            class="py-2 px-4 rounded-md" 
            preserve-scroll
        >
        </Link>

        <Link v-for="(link, index) in renderizarLinks(links)"
            :key="index"
            :href="link.url"
            class="py-1 px-2 rounded-sm"
            :class="{'bg-teal-500 text-white' : link.active}"
            preserve-scroll
            v-html="link.label">
        </Link>

        <Link 
            :href="links[links.length -1].url ? links[links.length -1].url : '#'" 
            v-html="prev_next(links[links.length -1].label, links[links.length -1].url)"
            class="py-2 px-4 rounded-md"
            preserve-scroll
        >
        </Link>
    </div>

</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    
    const prev_next = (label, link) => {
        if(link != null){

            if(label == '&laquo; Previous'){
                label = '<font-awesome-icon class="fa-solid fa-caret-left" />'
            } else if (label == 'Next &raquo;') {
                label = '<font-awesome-icon class="fa-solid fa-caret-right" />'
            }
            return label
        }
    }

    const props = defineProps({
        links: Array
    })

// referencia: https://stackoverflow.com/questions/27655992/limit-amount-of-links-shown-with-laravel-pagination  pesquisar por 'vue' com ctrl+f
    const renderizarLinks = (linksRecebidos) => {
        let index , start, end = 0;
        let linksFormatados = [];
        index = linksRecebidos.findIndex(o => o.active === true );

        if(index >= 3){
            start = index - 3

        }else if(index == 2){
            start = index - 2

        }else if(index == 1){
            start = index - 1
        }

        if (index == 1) { 
            end = index + 5;

        } else if (index >= 5) {
            end = index + 4;

        }  else {
            end = index + 4;
        }

        linksFormatados = linksRecebidos.slice(start,end);

        // Os links de anterior e próxima serão inseridos à parte em volta do link que chama esta função para ficarem sempre visíveis
        linksFormatados.shift()
        linksFormatados.pop()

        return linksFormatados;
    }

</script>

<style scoped>

    /* .page-item:nth-child( 1 ),
    .page-item:nth-last-child( 1 ) {

        display: none;
    } */


</style>
