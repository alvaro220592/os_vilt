import { ref } from 'vue';

export default async function useBuscaCep(cep) {
    const resultadoCep = ref('');
    const cepNaoEncontrado = ref(false)

    try {
        const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
        const data = await response.json();
        
        if (!data.erro) {
            resultadoCep.value = data;
        } else {
            cepNaoEncontrado.value = true
        }

    } catch (error) {
        console.error(error);
    }

    return {
        resultadoCep,
        cepNaoEncontrado
    };
}