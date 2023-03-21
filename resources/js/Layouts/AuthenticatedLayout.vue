<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/vue3";
import Sidebar from "@/Components/Sidebar/Sidebar.vue";
import Navbar from "@/Components/Navbar/Navbar.vue";

const showingNavigationDropdown = ref(false);
const show = ref(false);
</script>

<template>
    <div class="flex w-full">
        <!-- container geral -->

        <Sidebar :show="show" @close="show = false" @toggle_sidebar="show = !show"></Sidebar>

        <!-- Parte à direita da sidebar -->
        <section
            class="block bg-red-200 h-screen transition-all duration-500"
            :class="show ? 'section_sidebar_expanded' : 'section_sidebar_collapsed'"
        >
            <!-- <div class="h-screen blur" :class="show ? '' : 'hidden'"></div> -->
            

            <!-- <Navbar @toggle_sidebar="show = !show"></Navbar> -->
            <Navbar></Navbar>

            <!-- Div que dá blur na tela quando expande a sidebar -->            
            <!-- ORIGINAL -->
            <!-- <div v-if="show" class="section_sidebar_expanded h-screen fixed top-0 right-0 bg-black/25 backdrop-blur"></div> -->
            
            <!-- VIGENTE -->
            <div 
                class="transition-all duration-500" 
                :class="show ? 'fixed top-0 right-0 h-screen bg-black/25 backdrop-blur section_sidebar_expanded' : 'section_sidebar_collapsed'">
            </div>

            <!-- TESTE -->
            <!-- <div 
                class="transition-all duration-500" 
                :class="show ? 'fixed top-0 right-0 h-screen bg-black/25 backdrop-blur section_sidebar_expanded'  : ''">
            </div> -->

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </section>
    </div>
</template>
<style>
    .section_sidebar_expanded {
        width: calc(100% - 180px);
        margin-left: 180px;
    }

    .section_sidebar_collapsed {
        margin-left: 46px;
        width: calc(100% - 46px);
    }

    @media only screen and (max-width: 600px) {
        .blur {
            min-height: 100vh;
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            background-color: #000000;
            opacity: 0.5;
        }
    }
</style>