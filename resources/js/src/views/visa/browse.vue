<template>
    <div class="vx-col w-full mb-base" v-if="can('browse-visa')">
        <vx-card ref="browse" title="Visas List" collapse-action refreshContentAction @refresh="getVisas">
            <vs-table search :data="visas">
                <template slot="header">
                    <vs-button v-if="can('browse-visa')" to="/dashboard/visa/create" size="small" icon-pack="feather" icon="icon-plus">Create Visa</vs-button>
                </template>
                <template slot="thead">
                    <vs-th>#</vs-th>
                    <vs-th>Image</vs-th>
                    <vs-th>Country</vs-th>
                    <vs-th>Price</vs-th>
                    <vs-th>Extraction Time</vs-th>
                    <vs-th>Visit Time</vs-th>
                    <vs-th>Expiry</vs-th>
                    <vs-th>Created At</vs-th>
                    <vs-th>Action</vs-th>
                </template>
                <template slot-scope="{data}">
                    <vs-tr :key="index" v-for="(visaData, index) in visas">
                        <vs-td :data="index">
                            {{ index+1 }}
                        </vs-td>

                        <vs-td :data="visaData.image">
                            <a v-if="visaData.image" :href="`${visaData.image.url}`" target="_blank"><img :src="`${visaData.image.url}`" width="50px" height="50px"></a>
                            <b v-else>No Image</b>
                        </vs-td>

                        <vs-td :data="visaData.country_name">
                            {{ visaData.country_name}}
                        </vs-td>

                        <vs-td :data="visaData.price">
                            {{ visaData.price}} {{ visaData.currency }}
                        </vs-td>

                        <vs-td :data="visaData.extraction_time">
                            {{ visaData.extraction_time}}
                        </vs-td>

                        <vs-td :data="visaData.visit_time">
                            {{ visaData.visit_time}}
                        </vs-td>

                        <vs-td :data="visaData.expiry">
                            {{ visaData.expiry}}
                        </vs-td>

                        <vs-td :data="visaData.created_at">
                            {{ visaData.created_at}}
                        </vs-td>

                        <vs-td>
                            <vs-row>
                                <div class="flex mb-4">
                                    <vs-button :to="`/dashboard/visa/${visaData.id}`" icon-pack="feather" icon="icon-eye" color="primary" radius type="border"></vs-button>
                                    <div class="w-1/3 ml-5" v-if="can('delete-visa')">
                                        <vs-button :id="`btn-delete-${visaData.id}`" class="vs-con-loading__container" radius color="danger" type="border" icon-pack="feather" icon="icon-trash" @click="is_requesting?$store.dispatch('viewWaitMessage', $vs):confirmDeleteVisa(visaData)"></vs-button>
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
    export default {
        name: "browse",
        mounted() {
            this.getVisas();
        },
        data: function (){
            return {
                searchText: "",
                resultTime: 0,
                visas: [],
                is_requesting: false
            }
        },
        methods: {
            getVisas(){
                // this.$vs.loading({container: this.$refs.browse, scale: 0.5});
                this.$store.dispatch('visa/getData', '')
                    .then(response => {
                        // this.$vs.loading.close(this.$refs.browse);
                        this.visas = response.data.data.data;
                    })
                    .catch(error => {
                        console.log(error);
                        // this.$vs.loading.close(this.$refs.browse);
                        this.$vs.notify({
                            title: 'Error',
                            text: error.response.data.error,
                            iconPack: 'feather',
                            icon: 'icon-alert-circle',
                            color: 'danger'
                        });
                    });
            },

            confirmDeleteVisa(type)
            {
                this.$vs.dialog({
                    type: 'confirm',
                    color: 'danger',
                    title: `Are you sure!`,
                    text: 'This data can not be retrieved again.',
                    accept: this.deleteVisa,
                    parameters: [type]
                });
            },

            deleteVisa(params)
            {
                this.is_requesting=true;
                this.$vs.loading({container: `#btn-delete-${params[0].id}`, color: 'danger', scale: 0.45});
                this.$store.dispatch('visa/delete', params[0].id)
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
