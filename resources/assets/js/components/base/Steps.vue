<template>
    <div class="steps">
        <step v-for="step in steps" :step="step" :currentStep="currentStep" :key="step.step" v-on:updateSteps="setCurrentStep($event)"></step>
    </div>
</template>

<script>
    import Step from './Step';

    export default {
        props: {
            currentStep: Number,
        },

        data() {
            return {
                steps: [
                    {name: 'Choose concept', step: 1, is_active: true},
                    {name: 'Priority Selection', step: 2, is_active: false},
                    {name: 'Qualities Selection', step: 3, is_active: false},
                    {name: 'Choose skills', step: 4, is_active: false},
                    {name: 'Spending Resources', step: 5, is_active: false},
                    {name: 'Spending leftovers Karma', step: 6, is_active: false},
                ]
            }
        },
        components : {
            Step
        },
        methods: {
            setCurrentStep: function(currentStep) {
                for (let i = 0; i< this.steps.length; i++ ) {
                    this.steps[i].is_active = false;
                }
                this.steps[currentStep-1].is_active = true;
                this.$emit('updateCurrentStep', currentStep);
            }
        },
        watch: {
            currentStep: function() {
                for (let i = 0; i< this.steps.length; i++ ) {
                    this.steps[i].is_active = false;
                }
                this.steps[this.currentStep-1].is_active = true;
            }
        }
    }
</script>
