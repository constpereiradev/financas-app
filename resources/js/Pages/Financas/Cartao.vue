<template>
    <div class="container p-5" style="background-color: #BDFA7C;">
        <Header></Header>

        <div class="col-sm-12 m-5 p-5">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Cartões</h2>
                </div>
            </div>

            <div v-for="cartao in cartaos" class="row">
                <div class="col-sm-2 m-3 mt-5 me-5">
                    <div class="row" style="height:100px;">
                        <button @click="mostrarCartao(cartao)" class="btn btn-secondary border-0"
                        style="background-color: #E0D56E; height: 160px;">
                            <svg xmlns="http://www.w3.org/2000/svg"
                            width="30" height="30" fill="black" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
                                <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z"/>
                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z"/>
                              </svg>
                              <small class="justify-content-center
                              mt-2 fs-2 fw-light text-dark
                              d-flex align-items-center">
                                  {{ cartao.nome }}
                              </small>
                        </button>
                    </div>

                    <div class="row">
                        <button type="button"
                        class="btn btn-danger" @click="deletarCartao(cartao.id)">
                            deletar
                        </button>

                        <button @click="this.cartao.nome = cartao.nome
                        this.cartao.numero = cartao.numero;
                        this.cartao.validade = cartao.validade;
                        this.cartao.cvv = cartao.cvv;
                        this.cartao.proprietario = cartao.proprietario;
                        this.cartao.id = cartao.id"
                        type="button" class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#atualizarCartaoModal">
                            atualizar
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 m-3 mt-5 me-5">
                <div class="row" style="height:100px;">
                    <button
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#novoCartaoModal"
                    style="background-color: #E0D56E; height: 160px;">
                        <svg xmlns="http://www.w3.org/2000/svg"
                        width="60" height="60" fill="black" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>

                    </button>
                </div>
            </div>


            <!-- Cartão frente -->
            <div v-if="cartao.frente" class="row d-flex
            align-items-center justify-content-center
            mt-5">
                <div class="col-sm-5">
                    <div class="card-body justify-content-center mb-5 rounded" style="height: 250px;  background-color: #E0D56E;">
                        <div class="row mb-5 m-5">
                            <div class="col-sm-12 p-4">
                                <div class="fs-3 row m-2 justify-content-center
                                fw-lighter">
                                    {{ cartao.nome }}
                                </div>

                                <div class="row fs-4 m-2 justify-content-center
                                fw-semibold">
                                    {{ cartao.numero }}
                                </div>

                                <div class="row fs-5 m-2 justify-content-center">
                                    {{ cartao.validade }}
                                </div>

                                <div class="row fs-5 m-5 justify-content-center
                                fw-light">
                                    {{ cartao.proprietario }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-12 justify-content-center d-flex align-items-center">
                    <button class="btn" @click="virarCartao">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                            <path
                                d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z" />
                            <path fill-rule="evenodd"
                                d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Cartão verso -->
            <div v-if="cartao.verso" class="row d-flex
            align-items-center justify-content-center
            mt-5">
                <div class="col-sm-5">
                    <div class="card-body rounded justify-content-center mb-5" style="height: 250px; background-color: #E0D56E;">
                        <div class="row mb-5 m-5">
                            <div class="col-sm-12 p-4">
                                <div class="row justify-content-center fs-3
                                m-2 fw-lighter">
                                    {{ cartao.nome }}
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-sm-12 d-flex
                                    align-content-end justify-content-center m-4 fs-4
                                    fw-semibold">
                                        {{ cartao.cvv }}
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-12 justify-content-center d-flex align-items-center">
                    <button class="btn" @click="virarCartao">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                            <path
                                d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z" />
                            <path fill-rule="evenodd"
                                d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal p/ cadastrar novo cartão -->
     <!-- Modal de nova despesa -->
     <div class="modal fade" id="novoCartaoModal"
     tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">
                         Cadastre um novo cartão
                     </h1>
                     <button type="button" class="btn-close"
                     data-bs-dismiss="modal" aria-label="Close">
                     </button>
                 </div>

                 <div class="modal-body">
                     <div class="col-sm-12">
                         <div class="row mb-3">
                             <div class="col-sm-6">
                                 <label class="form-label">
                                     Nome do cartao
                                 </label>
                                 <input type="text" name=""
                                 id="nomeCartao"
                                 v-model="cartao.nome"
                                 class="form-control">
                             </div>

                             <div class="col-sm-6">
                                <label class="form-label">
                                    Número do cartao
                                </label>
                                <input type="text" name=""
                                id="numeroCartao"
                                v-model="cartao.numero"
                                class="form-control">
                            </div>

                             <div class="col-sm-6">
                                 <label class="form-label">
                                     Validade do cartao
                                 </label>
                                 <input type="number" name=""
                                 id="validadeCartao"
                                 v-model="cartao.validade"
                                 class="form-control">
                             </div>
                         </div>

                         <div class="row mb-3">
                             <div class="col-sm-12">
                                 <label class="form-label">
                                     Cvv do cartão
                                 </label>
                                 <input type="number" name=""
                                 id="cvvCartao"
                                 v-model="cartao.cvv"
                                 class="form-control">
                             </div>

                         </div>

                         <div class="row mb-3">
                             <div class="col-sm-12">
                                 <label class="form-label">
                                     Proprietário do cartão
                                 </label>
                                 <input type="text" name=""
                                 id="proprietarioCartao"
                                 v-model="cartao.proprietario"
                                 class="form-control">
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="modal-footer">
                     <button @click="this.cartao.nome = '';
                     this.cartao.validade = ''; this.cartao.cvv = '';
                     this.cartao.numero = ''; this.cartao.proprietario = ''"
                     type="button" class="btn btn-secondary fw-bold"
                     data-bs-dismiss="modal">
                         Fechar
                     </button>

                     <button @click="adicionarCartao"
                     type="button"
                     class="btn btn-success fw-bold">
                         Salvar
                     </button>
                 </div>
             </div>
         </div>
     </div>

     <!-- Modal para atualizar cartão -->

     <div class="modal fade" id="atualizarCartaoModal"
     tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">
                         Atualizar cartao
                     </h1>
                     <button type="button" class="btn-close"
                     data-bs-dismiss="modal" aria-label="Close">
                     </button>
                 </div>

                 <div class="modal-body">
                     <div class="col-sm-12">
                         <div class="row mb-3">
                             <div class="col-sm-6">
                                 <label class="form-label">
                                     Nome da cartao
                                 </label>
                                 <input type="text" name=""
                                 id="nomeCartao"
                                 v-model="this.cartao.nome"
                                 class="form-control">
                             </div>

                             <div class="col-sm-6">
                                 <label class="form-label">
                                     Numero do cartão
                                 </label>
                                 <input type="text" name=""
                                 id="numeroCartao"
                                 v-model="this.cartao.numero"
                                 class="form-control">
                             </div>
                         </div>

                         <div class="row mb-3">
                             <div class="col-sm-12">
                                 <label class="form-label">
                                     Validade da cartao
                                 </label>
                                 <input type="text" name=""
                                 id="validadeCartao"
                                 v-model="this.cartao.validade"
                                 class="form-control">
                             </div>

                         </div>

                         <div class="row mb-3">
                             <div class="col-sm-12">
                                 <label class="form-label">
                                     Cvv do cartão
                                 </label>
                                 <input type="text" name=""
                                 id="cvvCartao"
                                 v-model="cartao.cvv"
                                 class="form-control">
                             </div>
                         </div>

                         <div class="row mb-3">
                            <div class="col-sm-12">
                                <label class="form-label">
                                   Proprietário do cartão
                                </label>
                                <input type="text" name=""
                                id="proprietariocartao"
                                v-model="cartao.proprietario"
                                class="form-control">
                            </div>
                        </div>
                     </div>
                 </div>

                 <div class="modal-footer">
                     <button @click="this.cartao.nome = '';
                     this.cartao.numero = ''; this.cartao.validade = '';
                     this.cartao.cvv = ''; this.cartao.proprietario = ''"
                     type="button" class="btn btn-secondary fw-bold"
                     data-bs-dismiss="modal">
                         Fechar
                     </button>

                     <button @click="atualizarCartao(this.cartao.id)"
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
import Header from '@/Layouts/Header.vue';
import axios  from "axios";

export default defineComponent({

    components: {
        Header,

    },

    props: ['cartaos'],

    methods: {
        virarCartao() {

            if (this.cartao.frente == true) {
                this.cartao.frente = false;
                this.cartao.verso = true;
            } else if (this.cartao.verso == true) {
                this.cartao.frente = true;
                this.cartao.verso = false;
            }


        },

        mostrarCartao(cartao){

            this.cartao.nome = cartao.nome;
            this.cartao.numero = cartao.numero;
            this.cartao.validade = cartao.validade;
            this.cartao.cvv = cartao.cvv;
            this.cartao.proprietario = cartao.proprietario;


            if(this.cartao.frente == true || this.cartao.verso == true ){

                this.cartao.frente = false;
                this.cartao.verso = false;

            }else {
                this.cartao.frente = true;
            }
        },

        adicionarCartao(){
            axios.post(route('cartao.store', {
                user_id: this.$page.props.auth.user.id,
                nome: this.cartao.nome,
                numero: this.cartao.numero,
                validade: this.cartao.validade,
                cvv: this.cartao.cvv,
                proprietario: this.cartao.proprietario,
            })).then(() => {
                window.location.reload();
            })
        },

        atualizarCartao(id){
            axios.patch('/atualizar/cartao/' + id, {
                nome: this.cartao.nome,
                valor: this.cartao.valor,
                validade: this.cartao.validade,
                cvv: this.cartao.cvv,
                proprietario: this.cartao.proprietario,
            }).then(() => {
                window.location.reload();
            })


        },

        deletarCartao(id){
            axios.delete('/deletar/cartao/' + id).then((response => {
                console.log('ok' + response.data)
            })).catch(err =>{
                console.log('erro: ' + err)
            }).then(() => {
                window.location.reload();
            })
        }


    },
    data() {
        return {
            cartao: {
                frente: false,
                verso: false,

                nome: '',
                numero: '',
                validade: '',
                proprietario: '',
                cvv: '',
            }
        }
    },

});

</script>
