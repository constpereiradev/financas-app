<template>

    <div class="container p-5" style="background-color: #BDFA7C;">

        <Header></Header>
        <div class="col-sm-12 mt-5 mb-5">

            <div class="row mt-5 ms-5 fs-1">
                Extrato
            </div>

            <div class="row justify-content-center d-flex-align-items-center">
                <div class="col-sm-8 rounded p-2 mt-5" style="background-color: #E0D56E;">
                    <div class="row" v-for="extrato in extratos">
                        <div class="col-sm-6">
                            <div
                            class="row justify-content-evenly d-flex align-items-start fs-3 fw-normal">
                                {{ extrato.nome }}

                                <div class="col-sm-12">
                                    <div class="row justify-content-evenly
                                    d-flex align-items-start fw-lighter"
                                    style="font-size: 17px;">
                                        5 de Out 2023
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div v-if="extrato.valor <=0"
                            class="row justify-content-evenly
                            d-flex align-items-start fs-3 fw-normal
                            text-danger">
                                {{ extrato.valor }}
                                <div class="col-sm-12">
                                    <div class="row justify-content-evenly

                                    d-flex align-items-start fw-lighter"
                                    style="font-size: 17px;">

                                    </div>
                                </div>
                            </div>

                            <div v-if="extrato.valor > 0"
                            class="row justify-content-evenly
                            d-flex align-items-start fs-3 fw-normal
                            text-success">
                                +{{ extrato.valor }}
                                <div class="col-sm-12">
                                    <div class="row justify-content-evenly

                                    d-flex align-items-start fw-lighter"
                                    style="font-size: 17px;">

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

import { defineComponent } from 'vue';
import Header from '@/Layouts/Header.vue';
import axios from 'axios';


export default defineComponent({

   components:{
        Header,
   },
   mounted(){

   },
   methods: {
        tipoExtrato(){
            //Mudar a cor conforme o tipo de extrato
        }
   },
   props: ['extratos'],
   data(){
       return{
            extrato: {
                salario: 660.00,
                academia: 75,
            },
       }
   },

});

</script>
