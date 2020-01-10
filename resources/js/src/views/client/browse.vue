<template>
    <div class="vx-col w-full mb-base" v-if="can('browse-client')">
        <vx-card ref="browse" title="Clients List" collapse-action refreshContentAction @refresh="getClients">
            <vs-table search :data="clients">
                <template slot="thead">
                    <vs-th>ID</vs-th>
                    <vs-th>Name</vs-th>
                    <vs-th>Email</vs-th>
                    <vs-th>Telephone</vs-th>
                    <vs-th>Adults</vs-th>
                    <vs-th>Children</vs-th>
                    <vs-th>Action</vs-th>
                </template>
                <template slot-scope="{data}">
                    <vs-tr :key="index" v-for="(client, index) in data">
                        <vs-td :data="client.id">
                            {{ client.id }}
                        </vs-td>

                        <vs-td :data="client.name">
                            {{ client.name}}
                        </vs-td>

                        <vs-td :data="client.email">
                            {{ client.email}}
                        </vs-td>

                        <vs-td :data="client.telephone">
                            {{ client.telephone}}
                        </vs-td>

                        <vs-td :data="client.adults">
                            {{ client.adults}}
                        </vs-td>

                        <vs-td :data="client.children">
                            {{ client.children}}
                        </vs-td>

                        <vs-td>
                            <vs-row>
                                <div class="flex mb-4">
                                    <div class="w-1/3 ml-5" v-if="can('delete-client')">
                                        <vs-button :id="`btn-client-delete-${client.id}`" class="vs-con-loading__container" radius color="danger" type="border" icon-pack="feather" icon="icon-trash" @click="is_requesting?$store.dispatch('viewWaitMessage', $vs):confirmDeleteClient(client)"></vs-button>
                                    </div>
                                </div>
                            </vs-row>
                        </vs-td>
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
        name: "Client",
        mounted() {
            this.getClients(Date.now());
        },
        data: function (){
            return {
                searchText: "",
                resultTime: 0,
                clients: [],
                is_requesting: false
            }
        },
        methods: {
            getClients(){
                this.$vs.loading({container: this.$refs.browse, scale: 0.5});
                this.$store.dispatch('client/getData', '')
                    .then(response => {
                        this.$vs.loading.close(this.$refs.browse);
                        this.clients = response.data.data.data;
                    })
                    .catch(error => {
                        console.log(error);
                        this.$vs.loading.close(this.$refs.browse);
                        this.$vs.notify({
                            title: 'Error',
                            text: error.response.data.error,
                            iconPack: 'feather',
                            icon: 'icon-alert-circle',
                            color: 'danger'
                        });
                    });
            },

            confirmDeleteClient(type)
            {
                this.$vs.dialog({
                    type: 'confirm',
                    color: 'danger',
                    title: `Are you sure!`,
                    text: 'This data can not be retrieved again.',
                    accept: this.deleteClient,
                    parameters: [type]
                });
            },

            deleteClient(params)
            {
                this.is_requesting=true;
                this.$vs.loading({container: `#btn-delete-${params[0].id}`, color: 'danger', scale: 0.45});
                this.$store.dispatch('client/delete', params[0].id)
                    .then(response => {
                        this.is_requesting = false;
                        this.$vs.loading.close(`#btn-delete-${params[0].id} > .con-vs-loading`);
                        this.clients = this.clients.filter(type => {return type.id !== params[0].id});
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
