<template>
    <div class="vx-col w-full mb-base" v-if="can('browse-visa-demand')">
        <vx-card ref="browse" title="Visa Requests" collapse-action refreshContentAction @refresh="getVisaDemands">
            <vs-table search :data="visas">
                <template slot="thead">
                    <vs-th>ID</vs-th>
                    <vs-th>Name</vs-th>
                    <vs-th>Email</vs-th>
                    <vs-th>Telephone</vs-th>
                    <vs-th>Created At</vs-th>
                    <vs-th>Action</vs-th>
                </template>
                <template slot-scope="{data : data}">
                    <vs-tr :key="index" v-for="(visa, index) in data">
                        <vs-td :data="visa.id">
                            {{ index+1 }}
                        </vs-td>

                        <vs-td :data="visa.name">
                            {{ visa.name}}
                        </vs-td>

                        <vs-td :data="visa.email">
                            {{ visa.email}}
                        </vs-td>

                        <vs-td :data="visa.phone">
                            {{ visa.phone}}
                        </vs-td>

                        <vs-td :data="visa.created_at">
                            {{ visa.created_at}}
                        </vs-td>

                        <vs-td>
                            <vs-row>
                                <div class="flex mb-4">
                                    <div class="w-1/3 ml-5" v-if="can('delete-visa-demand')">
                                        <vs-button :id="`btn-delete-${visa.id}`" class="vs-con-loading__container" radius color="danger" type="border" icon-pack="feather" icon="icon-trash" @click="is_requesting?$store.dispatch('viewWaitMessage', $vs):confirmDeleteVisaDemand(visa)"></vs-button>
                                    </div>
                                </div>
                            </vs-row>
                        </vs-td>
                        <template class="expand-user" slot="expand">
                            <div class="con-expand-users w-full">
                                <vs-row>
                                    <vs-col vs-xs="12" vs-sm="12" vs-lg="12">
                                        {{visa.description}}
                                    </vs-col>
                                </vs-row>
                            </div>
                        </template>
                    </vs-tr>
                </template>
            </vs-table>
        </vx-card>
    </div>
</template>

<script>
    import "@fortawesome/fontawesome-free/css/all.css"
    import "@fortawesome/fontawesome-free/js/all.js"
    export default {
        name: "ViewData",
        mounted() {
            this.getVisaDemands();
        },
        data: function (){
            return {
                searchText: "",
                resultTime: 0,
                visas: [],
                is_requesting: false
            }
        },
        props: {
            visa_id: {
                required:false
            }
        },
        methods: {
            getVisaDemands(){
                let payload = '';
                if (this.visa_id){
                    payload = `?visa=${this.visa_id}`
                }
                this.$store.dispatch('visaDemand/getData', payload)
                    .then(response => {
                        this.visas = response.data.data.data;
                    })
                    .catch(error => {
                        console.log(error);
                        this.$vs.notify({
                            title: 'Error',
                            text: error.response.data.error,
                            iconPack: 'feather',
                            icon: 'icon-alert-circle',
                            color: 'danger'
                        });
                    });
            },

            confirmDeleteVisaDemand(type)
            {
                this.$vs.dialog({
                    type: 'confirm',
                    color: 'danger',
                    title: `Are you sure!`,
                    text: 'This data can not be retrieved again.',
                    accept: this.deleteVisaDemand,
                    parameters: [type]
                });
            },

            deleteVisaDemand(params)
            {
                this.is_requesting=true;
                this.$vs.loading({container: `#btn-delete-${params[0].id}`, color: 'danger', scale: 0.45});
                this.$store.dispatch('visaDemand/delete', params[0].id)
                    .then(response => {
                        this.is_requesting = false;
                        this.$vs.loading.close(`#btn-delete-${params[0].id} > .con-vs-loading`);
                        this.visas = this.visas.filter(type => {return type.id !== params[0].id});
                        this.$vs.notify({
                            title: 'Success',
                            text: response.data.message,
                            iconPack: 'feather',
                            icon: 'icon-check',
                            color: 'success'
                        });
                    })
                    .catch(error => {
                        console.log(error);
                        this.is_requesting=false;
                        this.$vs.loading.close(`#btn-delete-${params[0].id} > .con-vs-loading`);
                        this.$vs.notify({
                            title: 'Error',
                            text: error.response.data.error,
                            iconPack: 'feather',
                            icon: 'icon-alert-circle',
                            color: 'danger'
                        });
                    });
            }
        }
    }
</script>

<style>
    .txt-hover:hover{
        cursor: pointer;
        color: black !important;
    }
</style>
