<template>
    <div class="vx-col w-full mb-base">
        <vx-card ref="browse" title="Blog List">
            <vs-table search :data="images">
                <template slot="header">
                    <vs-button to="/dashboard/background/create" size="small" icon-pack="feather" icon="icon-plus">Add new Image</vs-button>
                </template>
                <template slot="thead">
                    <vs-th>#</vs-th>
                    <vs-th>Image</vs-th>
                    <vs-th>Action</vs-th>
                </template>
                <template slot-scope="{data}">
                    <vs-tr :key="index" v-for="(image, index) in images">
                        <vs-td :data="image.id">
                            {{ index+1 }}
                        </vs-td>

                        <vs-td :data="image">
                            <a v-if="image" :href="`${image.url}`" target="_blank"><img :src="`${image.url}`" width="50px" height="50px"></a>
                        </vs-td>

                        <vs-td>
                            <vs-row>
                                <div class="flex mb-4">
                                    <div class="w-1/3 ml-5" v-if="can('delete-post')">
                                        <vs-button :id="`btn-delete-${image.id}`" class="vs-con-loading__container" radius color="danger" type="border" icon-pack="feather" icon="icon-trash" @click="is_requesting?$store.dispatch('viewWaitMessage', $vs):confirmDeleteBlog(image)"></vs-button>
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
    import axios from "../../http/axios";

    export default {
        name: "browse",
        mounted() {
            this.getBlogs();
        },
        data: function (){
            return {
                images: [],
                is_requesting: false
            }
        },
        methods: {
            getBlogs(){
                axios.get(`/background`)
                    .then(response => {
                        this.images = response.data.data;
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

            confirmDeleteBlog(blog)
            {
                this.$vs.dialog({
                    type: 'confirm',
                    color: 'danger',
                    title: `Are you sure!`,
                    text: 'This data can not be retrieved again.',
                    accept: this.deleteBlog,
                    parameters: [blog]
                });
            },

            deleteBlog(params)
            {
                this.is_requesting=true;
                this.$vs.loading({container: `#btn-delete-${params[0].id}`, color: 'danger', scale: 0.45});
                this.$store.dispatch('blog/delete', params[0].id)
                    .then(response => {
                        this.is_requesting = false;
                        this.$vs.loading.close(`#btn-delete-${params[0].id} > .con-vs-loading`);
                        this.images = this.images.filter(blog => {return blog.id !== params[0].id});
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
