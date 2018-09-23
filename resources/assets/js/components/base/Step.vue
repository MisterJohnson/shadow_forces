<template>
    <div v-bind:class="{ 'active' : step.is_active }" class="step" @click="activateStep()">
        <div class="counter">
            <div class="number">
                {{ step.step }}
            </div>
            <div class="step-name">
                {{ step.name }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['step'],

        data () {
            return {
                active: false,
            }
        },

        methods: {
            activateStep: function() {
                this.step.is_active = !this.step.is_active;
                console.log(this.step.step + ' : ' + this.step.is_active);
                this.$emit('updateSteps', this.step.step);
            }
        }
    }
</script>
