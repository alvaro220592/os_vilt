<template>
    <div class="flex flex-row">
        <Link :href="visualizar">
            <font-awesome-icon icon="fa-solid fa-eye" class="mx-2 my-1 text-blue-600" />
        </Link>

        <Link :href="editar">
            <font-awesome-icon icon="fa-solid fa-pen" class="mx-2 my-1 text-yellow-600" />
        </Link>
        
        <Link :href="excluir">
            <font-awesome-icon icon="fa-solid fa-trash-can" class="mx-2 my-1 text-red-600" />
        </Link>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'

    defineProps({
        visualizar: String,
        editar: String,
        excluir: String
    })
</script>

<style lang="scss" scoped>

</style>