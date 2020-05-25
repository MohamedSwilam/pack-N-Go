<template>
    <div>
        <div v-if="can('create-visa')" class="vx-col w-full mb-base">
            <vx-card ref="create" title="Create Visa">
                <form-wizard color="rgba(var(--vs-primary), 1)" :title="null" :subtitle="null" finishButtonText="Submit" @on-complete="create">
                    <tab-content title="Visa Details" class="mb-5">

                        <!-- tab 1 content -->
                        <div class="vx-row">
                            <div class="vx-col md:w-1/2 w-full mt-5">
                                <vs-input label="Country Name" v-model="form.country_name" class="w-full" />
                            </div>

                            <div class="vx-col md:w-1/4 w-full mt-5">
                                <div class="centerx pt-6">
                                    <vs-input-number v-model="form.price" label="Price:"/>
                                </div>
                            </div>
                            <div class="vx-col md:w-1/4 w-full mt-12">
                                <input type="radio" name="currency" v-model="form.currency" value="LE"/>
                                <label>LE</label>
                                <input type="radio" name="currency" v-model="form.currency" value="$"/>
                                <label>$</label>
                            </div>
                            <div class="vx-col md:w-1/2 w-full mt-5">
                                <vs-input label="Extraction Time" v-model="form.extraction_time" class="w-full" />
                            </div>
                            <div class="vx-col md:w-1/2 w-full mt-5">
                                <vs-input label="Visit Time" v-model="form.visit_time" class="w-full" />
                            </div>
                            <div class="vx-col md:w-1/2 w-full mt-5">
                                <vs-input label="Expiry" v-model="form.expiry" class="w-full" />
                            </div>
                            <div class="vx-col md:w-1/2 w-full mt-5">
                                <input type="file" class="form-control" @change="previewImage">
                            </div>
                        </div>
                    </tab-content>

                    <!-- tab 2 content -->
                    <tab-content title="Required Documents" class="mb-5">
                        <div class="vx-row">
                            <vs-button @click="addRequirement" size="small" icon-pack="feather" icon="icon-add">Add Requirement</vs-button>
                        </div>
                        <div class="vx-row" v-for="(requirement, index) in form.required_documents">
                            <div class="vx-col md:w-1/2 w-full">
                                <div class="centerx pt-6">
                                    <vs-input label="Description" v-model="requirement.description" class="w-full" />
                                </div>
                            </div>
                            <div class="vx-col w-full">
                                <vs-button class="mt-5" @click="removeRequirement(index)" size="small" icon-pack="feather" color="danger" icon="icon-trash">Remove Row</vs-button>
                            </div>
                            <vs-divider></vs-divider>
                        </div>
                    </tab-content>
                </form-wizard>

            </vx-card>
        </div>
    </div>
</template>

<script>
    import {FormWizard, TabContent} from 'vue-form-wizard'
    import 'vue-form-wizard/dist/vue-form-wizard.min.css'
    export default {
        name: "create",
        mounted() {
            // this.getRoles();
        },

        data: function () {
            return {
                roles: [],
                form: {
                    country_name: '',
                    price: 0,
                    currency: '',
                    extraction_time: '',
                    visit_time: '',
                    expiry: '',
                    image: null,
                    required_documents: [
                    ],
                },
                uploadedImage: null,
                is_requesting: false
            }
        },
        components: {
            FormWizard,
            TabContent
        },
        methods: {

            addRequirement()
            {
                this.form.required_documents.push({
                    description: ''
                });
            },

            removeRequirement(index)
            {
                if (this.form.required_documents.length>0){
                    this.form.required_documents.splice(index, 1);
                }
            },

            create() {
                this.is_requesting=true;
                let form_data = new FormData();

                for (let key in this.form ) {
                    if ((key === 'image') && this.form.hasOwnProperty(key)){
                        if (this.form[key]) {
                            for (let i=0; i<this.form[key].length; i++){
                                form_data.append(key, this.form[key][i]);
                            }
                        }
                    } else if(key === 'required_documents'){
                        form_data.append(key, JSON.stringify(this.form[key]));
                    }
                    else {
                        form_data.append(key, this.form[key]);
                    }
                }
                this.$store.dispatch('visa/create', form_data)
                    .then(response => {
                        this.$router.push(`/dashboard/visa`);
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
                        this.$vs.notify({
                            title: 'Error',
                            text: error.response.data.errors[Object.keys(error.response.data.errors)[0]][0],
                            iconPack: 'feather',
                            icon: 'icon-alert-circle',
                            color: 'danger'
                        });
                    });
            },

            previewImage: function(event) {
                // Reference to the DOM input element
                var input = event.target;
                // Ensure that you have a file before attempting to read it
                if (input.files && input.files[0]) {
                    // create a new FileReader to read this image and convert to base64 format
                    var reader = new FileReader();
                    // Define a callback function to run, when FileReader finishes its job
                    reader.onload = (e) => {
                        // Note: arrow function used here, so that "this.imageData" refers to the imageData of Vue component
                        // Read image as base64 and set to imageData
                        this.uploadedImage = e.target.result;
                        this.form.image = input.files;
                    };
                    // Start the reader job - read file as a data url (base64 format)
                    reader.readAsDataURL(input.files[0]);
                }
            }
        }
    }
</script>

<style>
    .image-preview {
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        padding-right: 20px;
        top: 6px;
        position: relative;
    }

    #img-upload {
        display: none;
    }

    img.preview {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        background-color: white;
        border: 1px solid #DDD;
        padding: 5px;
    }

    .vs-input-number {
        width: fit-content;
    }
</style>
