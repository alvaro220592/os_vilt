<template>
    <h1 class="text-xl text-white font-bold mb-4">Clientes</h1>

    <div class="my-7 flex flex-col md:flex-row justify-between gap-2">
        <div class="w-full md:w-40 flex items-center">
            <!-- <Link :href="route('clients.create')" class="w-full h-full inline-flex items-center px-4 py-2 bg-purple-800 dark:bg-gray-200 border border-transparent rounded-sm font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-purple-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"> -->
            <Link :href="route('clients.create')" class="w-full text-center px-4 py-2 bg-purple-800 dark:bg-gray-200 border border-transparent rounded-sm font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-purple-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                Cadastrar
            </Link>
        </div>

        <div class="">
            <TextInput class="w-full" type="text" placeholder="Buscar" v-model="search"></TextInput>
        </div>
    </div>
    
    <div class="overflow-x-auto bg-white scroll_div">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="border-b">
                        <tr>
                            <th scope="col" class="text-md font-bold text-gray-600 px-6 py-1 text-left">ID</th>
                            <th scope="col" class="text-md font-bold text-gray-600 px-6 py-1 text-left">Nome</th>
                            <th scope="col" class="text-md font-bold text-gray-600 px-6 py-1 text-left">CPF/CNPJ</th>
                            <th scope="col" class="text-md font-bold text-gray-600 px-6 py-1 text-left">Endereço</th>
                            <th scope="col" class="text-md font-bold text-gray-600 px-6 py-1 text-left">Email</th>
                            <th scope="col" class="text-md font-bold text-gray-600 px-6 py-1 text-left">Telefone</th>
                            <th scope="col" class="text-md font-bold text-gray-600 px-6 py-1 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="client in clients.data" :key="client.id" class="border-b">
                            <td class="text-sm text-gray-900 font-light px-6 py-1 whitespace-nowrap">{{ client.id }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-1 whitespace-nowrap">{{ client.person.nome }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-1 whitespace-nowrap">{{ client.person.cpf_cnpj }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-1 whitespace-nowrap">{{ client.person.address.logradouro }}, {{ client.person.num_endereco }}, CEP {{ client.person.address.cep }}, {{ client.person.address.city.cidade }} - {{ client.person.address.city.state.sigla }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-1 whitespace-nowrap">{{ client.person.email.email }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-1 whitespace-nowrap">{{ client.person.telefone.telefone }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-1 whitespace-nowrap flex justify-center items-center"><TableActions :visualizar="route('clients.show', client.id)" :editar="route('clients.edit', client.id)" :excluir="route('clients.destroy', client.id)" /></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <Pagination :links="clients.links" />
</template>

<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
    import TableActions from '@/Components/TableActions.vue'
    import Pagination from '@/Components/Pagination/Pagination.vue'
    import { Link } from '@inertiajs/inertia-vue3'
    import { Inertia } from '@inertiajs/inertia'
    import { ref, watch } from 'vue'
    import TextInput from '@/Components/TextInput.vue'

    const props = defineProps({
        clients: {
            type: Object,
            default: () => ({})
        },
        filters: {
            type: Object,
            default: () => ({})            
        }
    })

    let search = ref(props.filters.search)

    watch(search, (novo_valor) => {
        Inertia.get('/clients',
            {
                search: novo_valor,
            },
            {
                preserveState: true,
                replace: true
            }
        )
    })

</script>

<script>
    export default {
        layout: AuthenticatedLayout
    }
</script>

<style lang="scss" scoped>

</style>