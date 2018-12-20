<template>
    <div class="container-fluid priority-form">
        <div class="outer">
            <div class="container wrapper">
                <div class="inner">
                    <div class="step_selector">
                        <steps v-on:updateCurrentStep="updateCurrentStep($event)" :currentStep="currentStep"></steps>
                    </div>
                </div>
                <div class="selector">
                    <form action="" method="POST" id="choose_concept">
                        <concept
                            v-if="currentStep === 1"
                        ></concept>
                        <selection
                            v-if="currentStep === 2"
                        ></selection>
                        <div>
                            <fieldset>
                                <btn_change
                                    v-for="btn in btns"
                                    :key="btn.id"
                                    :btn="btn"
                                    :current-step="currentStep"
                                    v-on:previousStep="updateCurrentStep($event)"
                                    v-on:nextStep="updateCurrentStep($event)"
                                ></btn_change>
                            </fieldset>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import steps from '../base/Steps';
    import concept from './creationStep/ConceptStep';
    import selection from './creationStep/PrioritySelection';

    export default {
        components : {
            steps,
            concept,
            selection
        },
        created() {
            this.$store.commit('creation/UPDATE_DATA');
            this.$store.commit('creation/SET_TOASTED', this.$toasted);
        },
        data() {
            return {
                btns: [
                    {
                        id: 1,
                        label: 'Previous',
                        class: {
                            'left' : true,
                            'right' : false,
                            'larger' : true,
                            'btn' : true,
                            'btn-primary' : true
                        },
                        show: false
                    },
                    {
                        id: 2,
                        label: 'Next',
                        class: {
                            'left' : false,
                            'right' : true,
                            'larger' : true,
                            'btn' : true,
                            'btn-primary' : true
                        },
                        show: false
                    }
                ],
                currentStep: 1,
            }
        },
        methods: {
            updateCurrentStep: function(currentStep) {
                this.currentStep = currentStep;
                this.displayBtn();
            },
            displayBtn: function() {
                if(this.currentStep > 1 && this.currentStep < 6) {
                    this.btns[0].show = true;
                    this.btns[1].show = true;
                } else {
                    if(this.currentStep === 1) {
                        this.btns[1].show = true;
                    } else {
                        this.btns[0].show = true;
                    }
                }
            },
        },
        mounted() {
            this.displayBtn();
        }
    }
</script>
