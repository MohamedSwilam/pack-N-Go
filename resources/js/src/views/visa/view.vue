<template>
    <div>
        <div class="vx-col w-full mb-base" v-if="can('view-visa')">
            <vx-card ref="view" title="Country Visa" collapseAction>
                <vs-row v-if="visa">
                    <vs-row class="mb-5">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            <vs-avatar class="mx-auto mb-2 block" size="120px" :src="visa.image.url" />
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            Country Name: {{visa.country_name}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            Price: {{visa.price}} {{visa.currency}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            Extraction Time: {{visa.extraction_time}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            Visit Time: {{visa.visit_time}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            Expiry: {{visa.expiry}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            Required Documents:
                            <ul>
                                <li v-for="(document, index) in visa.documents.data">
                                    {{index + 1}} - {{ document.description }}
                                </li>
                            </ul>
                        </vs-col>
                    </vs-row>
                </vs-row>
            </vx-card>
            <demands v-if="this.visa" :visa_id="visa.id"></demands>
        </div>
    </div>
</template>

<script>
    import demands from "../visaDemand/browse";
    export default {
        name: "viewData",
        mounted() {
            this.getVisaData();
        },
        data: () => {
            return {
                visa: null,
                is_requesting: false,
            }
        },
        components: {
            'demands': demands,
        },
        methods: {
            getVisaData() {
                this.$vs.loading({container: this.$refs.view.$refs.content, scale: 0.5});
                this.$store.dispatch('visa/view', this.$route.params.id)
                    .then(response => {
                        this.visa = response.data.data.data;
                        this.$vs.loading.close(this.$refs.view.$refs.content);
                    })
                    .catch(error => {
                        console.log(error);
                        this.$vs.loading.close(this.$refs.view.$refs.content);
                        this.$vs.notify({
                            title: 'Error',
                            text: error.response.data.error,
                            iconPack: 'feather',
                            icon: 'icon-alert-circle',
                            color: 'danger'
                        });
                    });
            },
        }
    }
</script>

<style>
    .txt-hover:hover{
        cursor: pointer;
        color: black !important;
    }
</style>
