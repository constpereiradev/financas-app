<template>

    <div class="container p-5">

        <div class="col-sm-12 m-5 p-5">
            <div class="row">
                <div class="col-sm-12 fs-1">
                    Carteira
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 fs-2 fw-lighter">
                    R$ {{ carteira.saldo }}
                </div>

                <div class="col-sm-9">
                    <button @click="this.carteira.id = carteira.id" class="btn"
                        data-bs-toggle="modal"
                        data-bs-target="#atualizarCarteiraModal">
                        <svg xmlns="http://www.w3.org/2000/svg"
                        width="30" height="30"
                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2 m-3 mt-5 me-5">
                    <div class="row" style="height:100px;">
                        <button @click="extrato" class="btn btn-secondary border-0"
                        style="background-color: #E0D56E; height: 160px;">
                        <svg xmlns="http://www.w3.org/2000/svg"
                        width="50" height="50" fill="back" class="bi bi-file-bar-graph" viewBox="0 0 16 16">
                            <path d="M4.5 12a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1zm3 0a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm3 0a.5.5 0 0 1-.5-.5v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1z"/>
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                          </svg>
                        </button>
                    </div>
                    <div class="row">
                        <small class="justify-content-center
                        mt-3
                        d-flex align-items-center">
                            Extrato
                        </small>
                    </div>
                </div>

                <div class="col-sm-2 m-3 mt-5 me-5">
                    <div class="row" style="height:100px;">
                        <button @click="despesas" class="btn btn-secondary border-0"
                        style="background-color: #E0D56E; height: 160px;">
                        <svg xmlns="http://www.w3.org/2000/svg"
                        width="50" height="50" fill="black" class="bi bi-cash-stack" viewBox="0 0 16 16">
                            <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z"/>
                          </svg>
                        </button>
                    </div>
                    <div class="row">
                        <small class="justify-content-center
                        mt-3
                        d-flex align-items-center">
                            Despesas
                        </small>
                    </div>
                </div>

                <div class="col-sm-2 m-3 mt-5 me-5">
                    <div class="row" style="height:100px;">
                        <button @click="cartoes" class="btn btn-secondary border-0"
                        style="background-color: #E0D56E; height: 160px;">
                            <svg xmlns="http://www.w3.org/2000/svg"
                            width="50" height="50" fill="black" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
                                <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z"/>
                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z"/>
                              </svg>
                        </button>
                    </div>
                    <div class="row">
                        <small class="justify-content-center
                        mt-3
                        d-flex align-items-center">
                            Cartões
                        </small>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal para atualizar carteira -->
    <div class="modal fade" id="atualizarCarteiraModal"
    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Atualizar carteira
                    </h1>
                    <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>

                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label class="form-label">
                                    Saldo da carteira
                                </label>
                                <input type="text" name=""
                                id="valorCarteira"
                                v-model="this.carteira.saldo"
                                class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button @click="this.carteira.saldo = ''"
                    type="button" class="btn btn-secondary fw-bold"
                    data-bs-dismiss="modal">
                        Fechar
                    </button>

                    <button @click="atualizarSaldo(this.carteira.id)"
                    type="button"
                    class="btn btn-success fw-bold">
                        Atualizar
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import { defineComponent } from 'vue';
import axios from 'axios';


export default defineComponent({

   components:{

   },
   mounted() {
        //this.atualizarSaldo();
   },
   props: ['extratos'],
   methods: {
            atualizarSaldo(){

                /*
                this.extratos.forEach(extrato => {
                    this.carteira.saldo += extrato.valor;
                });
                */
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
        },
   data(){
       return{
        carteira: {
            saldo: 0.00,
        },


       }
   },

});

</script>
