<template>
    <!-- <div v-if="show" class="h-screen fixed top-0 w-full bg-black/25 backdrop-blur"></div> -->

    <aside 
        class="fixed bg-teal-600  text-white h-screen top-0 transition-all duration-500 p-3"
        :class="show ? 'sidebar_expanded' : 'sidebar_collapsed'"
    >
        <!-- <div class="text-end h-10 overflow-hidden">
            <font-awesome-icon @click="$emit('close')" icon="fa-regular fa-circle-xmark" class="cursor-pointer mt-2 text-2xl ml-9 transition-all duration-500" :class="show ? '' : 'hidden'" />
        </div> -->

        <!-- <slot></slot> -->

            <ul class="menu_ul overflow-x-hidden">
                
                <li class="block">
                    <font-awesome-icon @click="this.$emit('toggle_sidebar')" icon="fa-solid fa-bars" class="mt-2 mb-10 cursor-pointer text-white text-2xl" />
                    <!-- <font-awesome-icon @click="show = !show" icon="fa-solid fa-bars" class="mt-2 mb-10 cursor-pointer text-white text-2xl" /> -->
                </li>

                <li class="block">
                    <div class="flex cursor-pointer" @click="dashboard_expanded = !dashboard_expanded">
                        <font-awesome-icon icon="fa-solid fa-chart-simple" class="menu_li my-5 text-2xl" />
                        <span class="my-5 mx-4" :class="show ? '' : 'hidden'">
                            Dashboard
                        </span>
                    </div>
                    <ul class="flex flex-col px-4" :class="dashboard_expanded && show ? 'dropDown' : 'hidden'">
                    <!-- <ul class="flex flex-col px-4"> -->
                        <li class="flex flex-row">
                            <font-awesome-icon icon="fa-regular fa-snowflake" class="mx-2 my-1" />
                            <span>teste</span>
                        </li>

                        <li class="flex flex-row">
                            <font-awesome-icon icon="fa-regular fa-snowflake" class="mx-2 my-1" />
                            <span>teste</span>
                        </li>

                        <li class="flex flex-row">
                            <font-awesome-icon icon="fa-regular fa-snowflake" class="mx-2 my-1" />
                            <span>teste</span>
                        </li>

                    </ul>
                </li>

                <li class="block">
                    <div class="flex cursor-pointer" @click="cadastros_expanded = !cadastros_expanded">
                        <font-awesome-icon icon="fa-solid fa-square-plus" class="menu_li my-5 text-2xl" />
                        <span class="my-5 mx-4" :class="show ? '' : 'hidden'">
                            Cadastros
                        </span>
                    </div>
                    <ul class="flex flex-col px-4" :class="cadastros_expanded && show ? 'dropDown' : 'hidden'">
                        <li class="flex flex-row">
                            <font-awesome-icon icon="fa-regular fa-snowflake" class="mx-2 my-1" />
                            <span>teste</span>
                        </li>

                        <li class="flex flex-row">
                            <font-awesome-icon icon="fa-regular fa-snowflake" class="mx-2 my-1" />
                            <span>teste</span>
                        </li>

                        <li class="flex flex-row">
                            <font-awesome-icon icon="fa-regular fa-snowflake" class="mx-2 my-1" />
                            <span>teste</span>
                        </li>

                    </ul>
                </li>

                <li class="block">
                    <div class="flex cursor-pointer" @click="configuracoes_expanded = !configuracoes_expanded">
                        <font-awesome-icon icon="fa-solid fa-gear" class="menu_li my-5 text-2xl" />
                        <span class="my-5 mx-4" :class="show ? '' : 'hidden'">
                            Configurações
                        </span>
                    </div>
                    <ul class="flex flex-col px-4" :class="configuracoes_expanded && show ? 'dropDown' : 'hidden'">
                        <li class="flex flex-row">
                            <font-awesome-icon icon="fa-regular fa-snowflake" class="mx-2 my-1" />
                            <span>teste</span>
                        </li>

                        <li class="flex flex-row">
                            <font-awesome-icon icon="fa-regular fa-snowflake" class="mx-2 my-1" />
                            <span>teste</span>
                        </li>

                        <li class="flex flex-row">
                            <font-awesome-icon icon="fa-regular fa-snowflake" class="mx-2 my-1" />
                            <span>teste</span>
                        </li>

                    </ul>
                </li>

                <li class="block">
                    <div class="flex cursor-pointer">
                        <font-awesome-icon icon="fa-solid fa-power-off" class="menu_li my-5 text-2xl" />
                        <span class="my-5 mx-4" :class="show ? '' : 'hidden'">
                            Sair
                        </span>
                    </div>
                </li>

            </ul>
    </aside>

</template>

<script setup>
    import { ref } from 'vue';
    const dashboard_expanded = ref(false)
    const cadastros_expanded = ref(false)
    const configuracoes_expanded = ref(false)

    defineProps({
        show: Boolean
    })

    defineEmits([
        'close',
        'toggle_sidebar'
    ])

</script>

<style scoped>

    .sidebar_expanded{
        width: 180px;
    }

    .sidebar_collapsed{
        width: 48px;
    }

    .menu_ul {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
    }

    .dropDown {
        animation: dropDown .3s ease-in-out forwards;
        transform-origin: top center
    }

    @keyframes dropDown {
        0% {
            transform: scaleY(0)
        }
        /* 80% {
            transform: scaleY(1.5)
        } */
        100% {
            transform: scaleY(1)
        }
    }
</style>