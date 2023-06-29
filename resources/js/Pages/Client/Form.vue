<template>
    <h1 class="text-xl text-white font-bold mb-4">Cadastro de cliente</h1>
    
    <form @submit.prevent="store" method="post">
        <fieldset class="border border-solid rounded-sm border-gray-600 py-5 my-5">
            <legend>&nbsp; Dados pessoais &nbsp;</legend>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                
                <div class="flex flex-col gap-2">
                    <InputLabel for="nome" value="Nome" />
                    <TextInput id="nome" type="text" v-model="form.nome" />
                    <span v-if="errors.nome" class="text-red-400">{{ errors.nome }}</span>
                </div>

                <div class="flex flex-col gap-2">
                    <InputLabel for="cpf_cnpj" value="CPF/CNPJ" />
                    <TextInput id="cpf_cnpj" type="text" v-model="form.cpf_cnpj" />
                    <span v-if="errors.cpf_cnpj" class="text-red-400">{{ errors.cpf_cnpj }}</span>
                </div>
            </div>
        </fieldset>
        
        <fieldset class="border border-solid rounded-sm border-gray-600 py-5 my-5">
            <legend>&nbsp; Endereço &nbsp;</legend>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

                <div class="flex flex-col gap-2">
                    <InputLabel for="cep" value="CEP" />
                    <TextInput id="cep" type="text" @keyup="executarBuscaCep" v-model="form.cep" />
                </div>

                <div class="flex flex-col gap-2">
                    <InputLabel for="logradouro" value="Logradouro" />
                    <TextInput id="logradouro" type="text" v-model="form.logradouro" />
                </div>

                <div class="flex flex-col gap-2">
                    <InputLabel for="num_endereco" value="Nº" />
                    <TextInput id="num_endereco" type="text" v-model="form.num_endereco" />
                </div>

                <div class="flex flex-col gap-2">
                    <InputLabel for="cidade" value="Cidade" />
                    <TextInput id="cidade" type="text" v-model="form.cidade" />
                </div>

                <div class="flex flex-col gap-2">
                    <InputLabel for="uf" value="UF" />
                    <TextInput id="uf" type="text" style="text-transform:uppercase" v-model="form.sigla" />
                </div>
            </div>
        </fieldset>

        <fieldset class="border border-solid rounded-sm border-gray-600 py-5 my-5">
            <legend>&nbsp; Contato &nbsp;</legend>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

                <div class="flex flex-col gap-2">
                    <InputLabel for="telefone" value="Telefone" />
                    <TextInput id="telefone" type="text" v-model="form.telefone" />
                </div>

                <div class="flex flex-col gap-2">
                    <InputLabel for="email" value="Email" />
                    <TextInput id="email" type="text" v-model="form.email" />
                </div>
            </div>
        </fieldset>
        

        <fieldset class="py-5 my-5">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

            <Link class="col-start-1 p-2 text-center text-orange-500 border border-orange-500 rounded-sm transition-all duration-300 hover:bg-orange-500 hover:text-white" :href="route('clients.index')">Cancelar</Link>
            
            <PrimaryButton class="md:col-start-4 p-2 text-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Salvar
            </PrimaryButton> 
        </div>
        </fieldset>
    </form>
</template>

<script>
export default {
    layout: AuthenticatedLayout
}
</script>

<script setup>
    import TextInput from '@/Components/TextInput.vue'
    import InputLabel from '@/Components/InputLabel.vue'
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
    import { Link, useForm } from '@inertiajs/inertia-vue3'
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import InputError from '@/Components/InputError.vue'
    import useBuscaCep from '@/Composables/useBuscaCep.js'
    import showToast from '@/Composables/useSwal2Toast.js'
    
    const form = useForm({
        nome: null,
        cpf_cnpj: null,
        num_endereco: null,
        cep: '',
        logradouro: null,
        cidade: null,
        sigla: null,
        email: null,
        telefone: null,
    })

    const store = () => {
        form.post(route('clients.store'), form)
    }

    const props = defineProps({
        errors: Object
    })

    const definirFormBuscaCep = (valorLogradouro, valorLocalidade, valorUf) => {
        form.logradouro = valorLogradouro
        form.cidade = valorLocalidade
        form.sigla = valorUf
    }

    const executarBuscaCep = async () => {
        if (form.cep.length == 8) {
            const { resultadoCep, cepNaoEncontrado } = await useBuscaCep(form.cep);
            if (!cepNaoEncontrado.value) {
                const res = resultadoCep.value;
                definirFormBuscaCep(res.logradouro, res.localidade, res.uf)
                document.getElementById('num_endereco').focus()

            } else {
                definirFormBuscaCep(null, null, null)
                showToast('error', 'CEP não encontrado')
                
            }
        }
    };

</script>

<style lang="scss" scoped>

</style>