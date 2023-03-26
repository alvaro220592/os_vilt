<template>
        <li>
            <Link :href="url" class="flex flex-row py-1 px-2 rounded-sm transition-all duration-200 hover:bg-gray-700">
                <span>
                    <font-awesome-icon icon="fa-solid fa-chevron-right" class="mr-2 text-xs" />
                </span>
                <span>
                    {{ nomeSubmenu }}
                </span>
            </Link>
        </li>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'

    defineProps({
        nomeSubmenu: String,
        url: String
    })
</script>

<style lang="scss" scoped>

</style>