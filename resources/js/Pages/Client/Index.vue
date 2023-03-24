<template>
    <div class="overflow-x-auto bg-white">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <h1 class="text-xl text-gray-600 font-bold mb-10">Clientes</h1>
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="border-b">
                        <tr>
                            <th scope="col" class="text-md font-bold text-gray-600 px-6 py-1 text-left">ID</th>
                            <th scope="col" class="text-md font-bold text-gray-600 px-6 py-1 text-left">Nome</th>
                            <th scope="col" class="text-md font-bold text-gray-600 px-6 py-1 text-left">CPF/CNPJ</th>
                            <th scope="col" class="text-md font-bold text-gray-600 px-6 py-1 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="client in clients.data" :key="client.id" class="border-b">
                            <td class="text-sm text-gray-900 font-light px-6 py-1 whitespace-nowrap">{{ client.id }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-1 whitespace-nowrap">{{ client.nome }} {{ client.sobrenome }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-1 whitespace-nowrap">{{ client.cpf_cnpj }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-1 whitespace-nowrap flex justify-center items-center"><TableActions :visualizar="route('clients.show', client.id)" :editar="route('clients.edit', client.id)" :excluir="route('clients.destroy', client.id)" /></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <Pagination :links="clients.links" />
    </div>
</template>

<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
    import TableActions from '@/Components/TableActions.vue'
    import Pagination from '@/Components/Pagination/Pagination.vue'

    const props = defineProps({
        clients: Object
    })
</script>

<script>
    export default {
        layout: AuthenticatedLayout
    }
</script>

<style lang="scss" scoped>

</style>