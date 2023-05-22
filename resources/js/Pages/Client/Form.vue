<template>
    <h1 class="text-xl text-white font-bold mb-4">Cadastro de cliente</h1>
    <form @submit.prevent="store" method="post">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <TextInput type="text" placeholder="Nome" v-model="form.nome" />
            <TextInput type="text" placeholder="Sobrenome" v-model="form.sobrenome" />
            <TextInput type="text" placeholder="CPF/CNPJ" v-model="form.cpf_cnpj" />
            <TextInput type="text" placeholder="CEP" v-model="form.cep" />
            <TextInput type="text" placeholder="Endereço" v-model="form.logradouro" />
            <TextInput type="text" placeholder="Nº" v-model="form.num_endereco" />
            <TextInput type="text" placeholder="Cidade" v-model="form.cidade" />
            <TextInput type="text" placeholder="UF" v-model="form.sigla" />

            <Link class="col-start-1 p-2 text-center text-orange-500 border border-orange-500 rounded-sm transition-all duration-300 hover:bg-orange-500 hover:text-white" :href="route('clients.index')">Cancelar</Link>
            
            <PrimaryButton class="md:col-start-4 p-2 text-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Salvar
            </PrimaryButton> 
        </div>
    </form>
</template>

<script>
export default {
    layout: AuthenticatedLayout
}
</script>

<script setup>
    import TextInput from '@/Components/TextInput.vue'
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
    import { Link, useForm } from '@inertiajs/vue3'
    import PrimaryButton from '@/Components/PrimaryButton.vue';

    const form = useForm({
        nome: null,
        sobrenome: null,
        cpf_cnpj: null,
        num_endereco: null,
        cep: null,
        logradouro: null,
        cidade: null,
        sigla: null,
    })

    const store = () => {
        form.post(route('clients.store'), form)
    }
</script>

<style lang="scss" scoped>

</style>