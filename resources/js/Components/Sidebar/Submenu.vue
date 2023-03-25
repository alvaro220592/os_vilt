<template>
        <li class="flex flex-row">
            <Link :href="url">
                <span>
                    <font-awesome-icon icon="fa-solid fa-chevron-right" class="mr-2" />
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