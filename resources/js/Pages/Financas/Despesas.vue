
<template>
    <div class="container p-5" style="background-color: #BDFA7C;">

        <Header></Header>

        <div class="col-sm-12 mt-5 mb-5">
            <div class="row mt-5 ms-4 fs-1">
                <div class="col-sm-12">
                    <h2>Despesas</h2>
                </div>
            </div>

        <div class="row">

            <div v-for="despesa in despesas" class="col-sm-2 ms-5 mt-5" style="height: fit-content;">
                <div class="row" style="height:100px;">
                    <button  class="btn btn-secondary
                    border-0 p-3"
                    style="background-color: #E0D56E; height: 160px;">
                    <svg xmlns="http://www.w3.org/2000/svg"
                    width="40" height="40" fill="black" class="bi bi-bus-front" viewBox="0 0 16 16">
                        <path d="M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Zm1-6c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9c1.876 0 3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44.303 44.303 0 0 0 8 4Zm0-1c-1.837 0-3.353.107-4.448.22a.5.5 0 1 1-.104-.994A44.304 44.304 0 0 1 8 2c1.876 0 3.426.109 4.552.226a.5.5 0 1 1-.104.994A43.306 43.306 0 0 0 8 3Z"/>
                        <path d="M15 8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1V2.64c0-1.188-.845-2.232-2.064-2.372A43.61 43.61 0 0 0 8 0C5.9 0 4.208.136 3.064.268 1.845.408 1 1.452 1 2.64V4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v3.5c0 .818.393 1.544 1 2v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V14h6v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2c.607-.456 1-1.182 1-2V8ZM8 1c2.056 0 3.71.134 4.822.261.676.078 1.178.66 1.178 1.379v8.86a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 11.5V2.64c0-.72.502-1.301 1.178-1.379A42.611 42.611 0 0 1 8 1Z"/>
                      </svg>
                        <small class="justify-content-center
                          mt-2 fs-3 fw-lighter text-dark
                          d-flex align-items-center">
                            Nome: {{ despesa.nome }}
                        </small>

                        <small class="justify-content-center
                          mt-2 fs-3 fw-normal text-dark
                          d-flex align-items-center">
                            R$:{{ despesa.valor }}
                        </small>

                        <small class="justify-content-center
                          mt-2 fs-3 fw-normal text-dark
                          d-flex align-items-center">
                            Frequência: {{ despesa.frequencia }}
                        </small>

                        <small class="justify-content-center
                          mt-2 fs-3 fw-normal text-dark
                          d-flex align-items-center">
                            Descrição: {{ despesa.descricao }}
                        </small>
                    </button>
                </div>
            </div>

            <div class="col-sm-2 ms-5 mt-5" style="height: fit-content;">
                <div class="row" style="height:100px;">
                    <button type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    border-0 p-3
                    style="background-color: #E0D56E; height: 160px;">
                    <svg xmlns="http://www.w3.org/2000/svg"
                    width="50" height="50" fill="black" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                          <small class="justify-content-center
                          mt-2 fs-5 fw-normal text-dark
                          d-flex align-items-center">
                              Adicionar
                          </small>
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal"
            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                            Cadastre sua nova despesa
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
                                        Nome da despesa
                                    </label>
                                    <input type="text" name=""
                                    id="nomeDespesa"
                                    v-model="despesa.nome"
                                    class="form-control">
                                </div>

                                <div class="col-sm-6">
                                    <label class="form-label">
                                        Valor da despesa
                                    </label>
                                    <input type="number" name=""
                                    id="valorDespesa"
                                    v-model="despesa.valor"
                                    class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label class="form-label">
                                        Frequência da despesa
                                    </label>
                                    <input type="text" name=""
                                    id="frequenciaDespesa"
                                    v-model="despesa.frequencia"
                                    class="form-control">
                                </div>

                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label class="form-label">
                                        Descrição da despesa (Opcional)
                                    </label>
                                    <input type="text" name=""
                                    id="descricaoDespesa"
                                    v-model="despesa.descricao"
                                    class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">
                            Fechar
                        </button>
                        <button @click="adicionarDespesa"
                        type="button"
                        class="btn btn-primary">
                            Salvar
                        </button>
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
   props: ['despesas'],
   methods: {
        adicionarDespesa(){
            axios.post(route('despesas.store', {
                user_id: this.$page.props.auth.user.id,
                nome: this.despesa.nome,
                valor: this.despesa.valor,
                frequencia: this.despesa.frequencia,
                descricao: this.despesa.descricao,
            }))
        }
   },
   data(){
       return{
            despesa: {
                nome: '',
                valor: '',
                frequencia: '',
                descricao: '',
            }
       }
   },

});

</script>
