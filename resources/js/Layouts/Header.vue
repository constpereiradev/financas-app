<template>
    <div class="header col-sm-12 p-4">
        <div class="row">
            <button @click="carteira" class="fs-5 btn col-sm-3">Carteira</button>
            <button @click="extrato" class="fs-5 btn col-sm-3">Extrato</button>
            <button @click="despesas" class="fs-5 btn col-sm-3">Despesas</button>
            <button @click="cartoes" class="fs-5 btn col-sm-3">Cartões</button>
        </div>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</template>

<script>

import axios from 'axios';

export default {

    methods: {
        carteira(){
            //axios.get(route('financas.carteira'));

            window.location.href = 'http://127.0.0.1:8000/carteira';
        },
        extrato(){
            window.location.href = 'http://127.0.0.1:8000/extratos';
        },
        despesas(){
            window.location.href = 'http://127.0.0.1:8000/despesas';
        },
        cartoes(){
            window.location.href = 'http://127.0.0.1:8000/cartao';
        },

    }
}
</script>

