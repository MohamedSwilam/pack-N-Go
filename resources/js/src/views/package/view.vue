<template>
    <div>
        <div class="vx-col w-full mb-base" v-if="can('view-package')">
            <vx-card ref="view" title="Package Information" collapseAction>
                <vs-row v-if="package">
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            {{package.title}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            {{package.description}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            {{package.price}} {{package.currency}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            Days/Nights: {{package.days}} / {{package.nights}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            {{package.rate}} Stars
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            Date: {{package.date}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            Season: {{package.season}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            Homepage: {{package.home_page}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            Triple: {{package.tbl}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            Double: {{package.dbl}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            Single: {{package.sgl}}
                        </vs-col>
                    </vs-row>
                    <vs-row class="mb-2">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            Child: {{package.child}}
                        </vs-col>
                    </vs-row>
                </vs-row>
                <br>
                <h3>Inclusions</h3>
                <vs-row class="mb-2" v-if="package">
                    <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12" v-for="inclusion in package.inclusions" v-bind:key="inclusion.id">
                        {{inclusion.name}}
                    </vs-col>
                </vs-row>
                <br>
                <h3>Exclusions</h3>
                <vs-row class="mb-2" v-if="package">
                    <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12" v-for="exclusion in package.exclusions" v-bind:key="exclusion.id">
                        {{exclusion.name}}
                    </vs-col>
                </vs-row>
                <br>
                <h3>Schedule</h3>
                <vs-row class="mb-2" v-if="package">
                    <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12" v-for="schedule in package.schedules" v-bind:key="schedule.id">
                        {{schedule.day}}: {{schedule.description}}
                    </vs-col>
                </vs-row>
                <br>
                <h3>Accommodations</h3>
                <vs-row class="mb-2" v-if="package">
                    <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12" v-for="accommodation in package.accommodations"  v-bind:key="accommodation.id">
                        City: {{accommodation.city}}<br>
                        Nights: {{accommodation.nights}}
                        Hotel: {{accommodation.hotel}}
                        Rate: {{accommodation.rate}}
                        <br>
                    </vs-col>
                </vs-row>
                <vs-row v-if="package">
                    <vs-row class="mb-5">
                        <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="12">
                            <vs-image v-for="image in package.medias" :src="image.url" v-bind:key="image.id"/>
                        </vs-col>
                    </vs-row>
                </vs-row>
            </vx-card>
        </div>
    </div>
</template>

<script>
    export default {
        name: "viewData",
        mounted() {
            this.getPackageData();
        },
        data: () => {
            return {
                package: null,
                is_requesting: false,
            }
        },
        methods: {
            getPackageData() {
                this.$store.dispatch('package/view', this.$route.params.id)
                    .then(response => {
                        this.package = response.data.data.data;
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
        }
    }
</script>

<style>
    .txt-hover:hover{
        cursor: pointer;
        color: black !important;
    }
</style>
