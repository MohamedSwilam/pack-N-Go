<template>
    <div class="vx-col w-full mb-base">
        <vx-card ref="browse" title="Insurance List" collapse-action refreshContentAction @refresh="getInsurances">
            <vs-table search :data="insurances">
                <template slot="thead">
                    <vs-th>#</vs-th>
                    <vs-th>Image</vs-th>
                    <vs-th>Name</vs-th>
                    <vs-th>Telephone</vs-th>
                    <vs-th>Passport #</vs-th>
                    <vs-th>Created At</vs-th>
                    <vs-th>Action</vs-th>
                </template>
                <template slot-scope="{data}">
                    <vs-tr :key="index" v-for="(insurance, index) in insurances">
                        <vs-td :data="insurance.id">
                            {{ index+1 }}
                        </vs-td>

                        <vs-td :data="insurance.image">
                            <img v-if="insurance.image" :src="`${insurance.image.url}`" width="50px" height="50px">
                            <b v-else>No Image</b>
                        </vs-td>

                        <vs-td :data="insurance.name">
                            {{ insurance.name}}
                        </vs-td>

                        <vs-td :data="insurance.phone">
                            {{ insurance.phone}}
                        </vs-td>

                        <vs-td :data="insurance.passport_number">
                            {{ insurance.passport_number}}
                        </vs-td>

                        <vs-td :data="insurance.created_at">
                            {{ insurance.created_at}}
                        </vs-td>

                        <vs-td>
                            <vs-row>
                                <div class="flex mb-4">
                                    <div class="w-1/3 ml-5" v-if="can('delete-insurance')">
                                        <vs-button :id="`btn-delete-${insurance.id}`" class="vs-con-loading__container" radius color="danger" type="border" icon-pack="feather" icon="icon-trash" @click="is_requesting?$store.dispatch('viewWaitMessage', $vs):confirmDeleteInsurance(insurance)"></vs-button>
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
            this.getInsurances();
        },
        data: function (){
            return {
                insurances: [],
                is_requesting: false
            }
        },
        methods: {
            getInsurances(){
                this.$store.dispatch('insurance/getData', '')
                    .then(response => {
                        this.insurances = response.data.data.data;
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

            confirmDeleteInsurance(insurance)
            {
                this.$vs.dialog({
                    type: 'confirm',
                    color: 'danger',
                    title: `Are you sure!`,
                    text: 'This data can not be retrieved again.',
                    accept: this.deleteInsurance,
                    parameters: [insurance]
                });
            },

            deleteInsurance(params)
            {
                this.is_requesting=true;
                this.$vs.loading({container: `#btn-delete-${params[0].id}`, color: 'danger', scale: 0.45});
                this.$store.dispatch('insurance/delete', params[0].id)
                    .then(response => {
                        this.is_requesting = false;
                        this.$vs.loading.close(`#btn-delete-${params[0].id} > .con-vs-loading`);
                        this.insurances = this.insurances.filter(insurance => {return insurance.id !== params[0].id});
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
