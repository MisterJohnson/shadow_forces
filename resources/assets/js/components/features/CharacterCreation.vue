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
                    <concept
                        v-if="currentStep === 1"
                        :currentStep="currentStep"
                        v-on:previousStep="updateCurrentStep($event)"
                        v-on:nextStep="updateCurrentStep($event)"
                    ></concept>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import steps from '../base/Steps';
    import concept from './creationStep/ConceptStep';

    export default {
        components : {
            steps,
            concept
        },
        data() {
            return {
                currentStep: 1,
            }
        },
        methods: {
            updateCurrentStep: function(currentStep) {
                this.currentStep = currentStep;
            },
        }
    }
</script>
