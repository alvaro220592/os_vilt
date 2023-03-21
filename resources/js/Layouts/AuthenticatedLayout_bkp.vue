<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/vue3";
import Sidebar from "@/Components/Sidebar/Sidebar.vue";

const showingNavigationDropdown = ref(false);
const show = ref(false);
</script>

<template>
    <div class="flex w-full">
        <!-- container geral -->

        <Sidebar :show="show" @close="show = false">
            <ul class="mt-5">
                <li>Menu1</li>
                <li>Menu2</li>
                <li>Menu3</li>
                <li>Menu4</li>
                <li>Menu5</li>
            </ul>
        </Sidebar>

        <!-- Parte à direita da sidebar -->
        <section
            class="block bg-red-200 h-screen transition-all duration-500"
            :class="show ? 'w-full' : 'w-full'"
        >
            <nav
                class="flex items-center justify-between flex-wrap bg-teal-500 p-6"
            >
                <button
                    class="bg-pink-300 px-5 py-3 rounded-md"
                    @click="show = !show"
                >
                    Toggleeeeeeeeeeeeeeeee
                </button>
            </nav>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </section>
    </div>
</template>
<style>
    /* .rightside_sidebar_expanded {
        
    } */
</style>